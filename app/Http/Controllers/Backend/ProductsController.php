<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Provider;
use App\Product;

class ProductsController extends AdminController
{
    //
    public $providers;

    public function __construct()
    {
        parent::__construct();
        $providerIds = [];
        $providers = Provider::all();
        foreach ($providers as $provider) {
            $providerIds[] = $provider->id;
        }
        $this->providers = array('' => 'Choose provider') +  Provider::whereIn('id', $providerIds)->pluck('name', 'id')->all();
    }

    public function index(Request $request)
    {
        $searchProduct = '';
        $products = Product::latest('updated_at');
        if ($request->input('q')) {
            $searchProduct = urldecode($request->input('q'));
            $products = $products->where('name', 'LIKE', '%'. $searchProduct. '%');
        }


        $products = $products->paginate(env('ITEM_PER_PAGE'));

        return view('admin.product.index', compact('products', 'searchProduct'));
    }

    public function create()
    {
        $providers = $this->providers;
        return view('admin.product.form', compact('providers'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['image_preview'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        $data['status'] = ($request->input('status') == 'on') ? true : false;

        try {
            Product::create($data);
        } catch(\Exception $ex)
        {
            return redirect('admin/products');
        }
        flash('Create Product success!', 'success');
        return redirect('admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $providers = $this->providers;
        return view('admin.product.form', compact('providers', 'product'));
    }

    public function update($id, ProductRequest $request)
    {
        $data = $request->all();
        $provider = Provider::find($id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image_preview'] = $this->saveImage($request->file('image'), $provider->image);
        }

        $data['status'] = ($request->input('status') == 'on') ? true : false;
        $provider->update($data);
        flash('Update Product success!', 'success');
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (file_exists(public_path('files/' . $product->image_preview))) {
            @unlink(public_path('files/' . $product->image_preview));
        }
        $product->delete();
        flash('Success deleted Product!');
        return redirect('admin/products');
    }
}
