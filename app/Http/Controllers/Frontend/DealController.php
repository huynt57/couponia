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

    public function getAllProducts()
    {
        $products = Product::all()->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $products
        ]);
    }

    public function getProductsByCategory($categoryId)
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

        $products = Products::where('category_id', $categoryId)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $products
        ]);

    }


    public function getProductsBySource($source)
    {

        $products = Product::where('source', $source)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.deals', [
            'deals' => $products
        ]);
    }


    public function getProductById($id)
    {
        if(!is_numeric($id))
        {
            return 'Khuyến mãi không tồn tại';
        }

        $checkProduct = Product::find($id)->count();

        if($checkProduct == 0)
        {
            return 'Khuyến mãi không tồn tại';
        }

        $product = Deal::find($id);

        return view('frontend.deal', [
            'deals' => $product
        ]);
    }


    public function crawl()
    {
        dd(Functions::crawl());
    }
}
