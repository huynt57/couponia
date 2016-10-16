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
        $deals = DB::table('deals')->whereNotIn('category_id', [
            config('constants.JAMJA_MAC'), config('constants.JAMJA_MP')
        ])->where(function($q) {
            $q->where('valid_to', '>=', Carbon::now()->toDateTimeString());
            $q->orWhereNull('valid_to');
        })->orderBy('created_at', 'desc');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
                    break;
            }
        }



        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);
    }

    public function getDealsMac(Request $request)
    {
        $deals = DB::table('deals')->where('category_id', config('constants.JAMJA_MAC'))->where('valid_to', '>=', Carbon::now()->toDateTimeString())->orWhereNull('valid_to')->orderBy('created_at', 'desc');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
                    break;
            }
        }



        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER') * 2);

        return view('frontend.deals_mac', [
            'deals' => $deals
        ]);
    }

    public function getDealsMP(Request $request)
    {
        $deals = DB::table('deals')->where('category_id', config('constants.JAMJA_MP'))->where('valid_to', '>=', Carbon::now()->toDateTimeString())->orWhereNull('valid_to')->orderBy('created_at', 'desc');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
                    break;
            }
        }



        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals_mp', [
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

        $deals = Deal::where('category_id', $categoryId)->where('valid_to', '>=', Carbon::now()->toDateTimeString())->orWhereNull('valid_to')->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);

    }

    public function getDealByAttributes(Request $request)
    {
        $category = $request->input('category');
        $provider = $request->input('provider');
        $time  = $request->input('time');





        $deals = DB::table('deals')->where('valid_to', '>=', Carbon::now()->toDateTimeString())->orWhereNull('valid_to');


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
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
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

        $deals = DB::table('deals')->where(function($query) {
          $query->where('valid_to', '>=', Carbon::now()->toDateTimeString());
            $query->orWhereNull('valid_to');
        })->where('source', $source)->orderBy('created_at', 'desc');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
                    break;
            }
        }

        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);
    }

    public function getDealsByAlias($alias, $category_id, Request $request)
    {



        $deals = DB::table('deals')->where(function($query) {
            $query->where('valid_to', '>=', Carbon::now()->toDateTimeString());
            $query->orWhereNull('valid_to');
        })->where('slug', $alias)->orderBy('created_at', 'desc');

        $time  = $request->input('time');

        if(!empty($time))
        {
            switch ($time)
            {
                case 'latest':
                    $deals = $deals->orderBy('created_at', 'desc');
                    break;
                case 'nearly-end':
                    $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->orderBy('valid_to', 'asc');
                    break;
            }
        }

        $deals = $deals->paginate(config('constants.PAGINATE_NUMBER'));

        if($category_id == config('constants.JAMJA_MAC')) {
            return view('frontend.deals_mac', [
                'deals' => $deals,

            ]);
        } else if ($category_id == config('constants.JAMJA_MP'))
            {
                return view('frontend.deals_mp', [
                    'deals' => $deals,

                ]);
            }
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
//        Deal::deleteIndex();
//        Deal::createIndex($shards = null, $replicas = null);
//        Deal::addAllToIndex();


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
                    'alias'
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
                        $deals = $deals->where('valid_to', '<=', Carbon::now()->addDay(5)->toDateTimeString())->sortByDesc('valid_to');
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
                'dealSearchPagination' => $dealsPaginationSearch,
                'query' => $query
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
