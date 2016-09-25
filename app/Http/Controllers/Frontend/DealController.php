<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Deal;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Deal\Functions;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


class DealController extends Controller
{
    //
    public function getAllDeals(Request $request)
    {
        $deals = DB::table('deals');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(3)->toDateTimeString())->orderBy('valid_to', 'desc');
                    break;
            }
        }

        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);
    }

    public function getDealsByCategory($categoryId)
    {
        if(!is_numeric($categoryId))
        {
            return 'Category không tồn tại';
        }

        $checkCategory = Category::find($categoryId)->count();

        if($checkCategory == 0)
        {
            return 'Category không tồn tại';
        }

        $deals = Deal::where('category_id', $categoryId)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);

    }

    public function getDealByAttributes(Request $request)
    {
        $category = $request->input('category');
        $provider = $request->input('provider');
        $time  = $request->input('time');





        $deals = DB::table('deals');


        if(!empty($category))
        {
            $deals = $deals->where('category', $category);
        }

        if(!empty($provider))
        {
            $deals = $deals->where('provider', $provider);
        }

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(3)->toDateTimeString())->orderBy('valid_to', 'desc');
                    break;
            }
        }

        $deals = $deals->orderBy('created_at', 'desc');


        return view('frontend.deals', [
            'deals' => $deals
        ]);




    }


    public function getDealsBySource($slug, $source, Request $request)
    {

        $deals = Deal::where('source', $source);

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(3)->toDateTimeString())->orderBy('valid_to', 'desc');
                    break;
            }
        }

        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);
    }


    public function getDealById($id)
    {
        if(!is_numeric($id))
        {
            return 'Khuyến mãi không tồn tại';
        }

        $checkDeal = Deal::find($id)->count();

        if($checkDeal == 0)
        {
            return 'Khuyến mãi không tồn tại';
        }

        $deal = Deal::find($id);

        return view('frontend.deal', [
            'deal' => $deal
        ]);
    }

    public function search(Request $request)
    {
       // Product::reindex();
       // Deal::deleteIndex();
       // Deal::createIndex($shards = null, $replicas = null);
       // Deal::addAllToIndex();


        $query = $request->input('q');
        $time  = $request->input('time');
        $page = $request->input('page', 1);


        $params = [
            'multi_match' => [
                'query' => $query,
                "type" => "cross_fields",
                'operator' => 'or',
                'fields' => [
                    'name',
                    'description',
                ]

            ]
        ];

        try {

            $deals = Deal::searchByQuery($params ,null, null,
                config('constants.PAGINATE_NUMBER'),
                config('constants.PAGINATE_NUMBER') * ($page-1)+1,
                ['id' => 'desc']);


            if (!empty($time)) {
                switch ($time) {
                    case 'latest':
                        $deals = $deals->sortByDesc('created_at');
                        break;
                    case 'nearly-end':
                        $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(3)->toDateTimeString())->sortByDesc('valid_to');
                        break;
                }
            }

            $dealsPaginationSearch = new LengthAwarePaginator($deals->toArray(),
                $deals->totalHits() - 1,
                config('constants.PAGINATE_NUMBER'),
                Paginator::resolveCurrentPage(),
                ['path' => Paginator::resolveCurrentPath()]);

            return view('frontend.deals', [
                'deals' => $deals,
                'dealSearchPagination' => $dealsPaginationSearch
            ]);
        } catch (Exception $e)
        {

        }

    }


//    public function crawl()
//    {
//        dd(Functions::crawl());
//    }
}
