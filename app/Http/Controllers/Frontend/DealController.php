<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Deal;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Deal\Functions;

class DealController extends Controller
{
    //
    public function getAllDeals()
    {
        $deals = Deal::all()->paginate(config('constants.PAGINATE_NUMBER'));

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


        $deals = DB::table('deals');


        if(!empty($category))
        {
            $deals = $deals->where('category', $category);
        }

        if(!empty($provider))
        {
            $deals = $deals->where('provider', $provider);
        }


        return view('frontend.deals', [
            'deals' => $deals
        ]);




    }


    public function getDealsBySource($source)
    {

        $deals = Deal::where('source', $source)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $deals
        ]);
    }


    public function getDealsById($id)
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
            'deals' => $deal
        ]);
    }


    public function crawl()
    {
        dd(Functions::crawl());
    }
}
