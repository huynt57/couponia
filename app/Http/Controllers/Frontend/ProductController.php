<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Deal\Functions;

class ProductController extends Controller
{
    //
    public function getAllProducts(Request $request)
    {
        $products = \DB::table('products')->paginate(config('constants.PAGINATE_NUMBER'));

        if($request->input('viewType') == 'horizontal')
        {
            return view('frontend.products-horizontal', [
                'products' => $products
            ]);
        }

        return view('frontend.products', [
            'products' => $products
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

        return view('frontend.products', [
            'products' => $products
        ]);

    }

    public function getProductByAttributes(Request $request)
    {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $category = $request->input('category');


    }


    public function getProductsBySource($source)
    {

        $products = Product::where('source', $source)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.products', [
            'products' => $products
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

        return view('frontend.products', [
            'products' => $products
        ]);
    }
}
