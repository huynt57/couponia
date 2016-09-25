<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Deal\Functions;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    //
    public function getAllProducts(Request $request)
    {
        $products = \DB::table('products')->inRandomOrder();

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $category = $request->input('category');
        $provider = $request->input('provider');


        if(!empty($minPrice) && !empty($maxPrice))
        {
            if(is_numeric($minPrice) || is_numeric($maxPrice))
            {
                $products =  $products->whereBetween('price', [$minPrice, $maxPrice]);
            }

        }

        if(!empty($category))
        {
            $products = $products->where('category', $category);
        }

        if(!empty($provider))
        {
            $products = $products->where('provider', $provider);
        }

        if($request->input('viewType') == 'horizontal')
        {
            return view('frontend.products-horizontal', [
                'products' => $products
            ]);
        }

        $products = $products->paginate(config('constants.PAGINATE_NUMBER'));

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
            'products' => $products,

        ]);

    }

    public function getProductByAttributes(Request $request)
    {
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $category = $request->input('category');
        $provider = $request->input('provider');



        $products = DB::table('products');

        if(!empty($minPrice) && !empty($maxPrice))
        {
            if(!is_numeric($minPrice) || !is_numeric($maxPrice))
            {
                $products =  $products->whereBetween('price', [$minPrice, $maxPrice]);
            }

        }

        if(!empty($category))
        {
            $products = $products->where('category', $category);
        }

        if(!empty($provider))
        {
            $products = $products->where('provider', $provider);
        }


        return view('frontend.products', [
            'products' => $products
        ]);




    }


    public function getProductsBySource($slug, $source)
    {

        $products = Product::where('source', $source)->paginate(config('constants.PAGINATE_NUMBER'));

        return view('frontend.products', [
            'products' => $products,
            'source' => $source
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

        $product = Product::find($id);

        return view('frontend.products', [
            'product' => $product
        ]);
    }

    public function search(Request $request)
    {
        // Product::reindex();
        //Product::deleteIndex();
        // Product::createIndex($shards = null, $replicas = null);
        //Product::addAllToIndex();


        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $category = $request->input('category');
        $provider = $request->input('provider');

        $query = $request->input('q');
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

        $products = Product::searchByQuery($params ,null, null,
            config('constants.PAGINATE_NUMBER'),
            config('constants.PAGINATE_NUMBER') * ($page-1)+1,
            ['id' => 'desc']);


        if(!empty($minPrice) && !empty($maxPrice))
        {
            if(!is_numeric($minPrice) || !is_numeric($maxPrice))
            {
                $products =  $products->whereBetween('price', [$minPrice, $maxPrice]);
            }

        }

        if(!empty($category))
        {
            $products = $products->where('category', $category);
        }

        if(!empty($provider))
        {
            $products = $products->where('provider', $provider);
        }

        $productsPaginationSearch = new LengthAwarePaginator($products->toArray(),
            $products->totalHits() - 1,
            config('constants.PAGINATE_NUMBER'),
            Paginator::resolveCurrentPage(),
            ['path' => Paginator::resolveCurrentPath()]);


        return view('frontend.products', [
            'products' => $products,
            'productSearchPagination' =>$productsPaginationSearch,
            'query' => $query
        ]);

    }
}
