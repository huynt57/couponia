<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderRequest;
use App\Provider;

class ProvidersController extends Controller
{


    /**
     * ProvidersController constructor.
     */



    public function index(Request $request)
    {
        $searchProvider = '';
        $providers = Provider::latest('updated_at');
        if ($request->input('q')) {
            $searchProvider = urldecode($request->input('q'));
            $providers = $providers->where('name', 'LIKE', '%'. $searchProvider. '%');
        }


        $providers = $providers->paginate(env('ITEM_PER_PAGE'));

        return view('admin.provider.index', compact('providers', 'searchProvider'));
    }

    public function create()
    {
        return view('admin.provider.form');
    }

    public function store(ProviderRequest $request)
    {
        $data = $request->all();
        $data['image'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        $data['status'] = ($request->input('status') == 'on') ? true : false;

        Provider::create($data);
        flash('Create Provider success!', 'success');
        return redirect('admin/Providers');
    }

    public function edit($id)
    {
        $provider = Provider::find($id);
        return view('admin.provider.form', compact('provider'));
    }

    public function update($id, ProviderRequest $request)
    {
        $data = $request->all();
        $provider = Provider::find($id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image_preview'] = $this->saveImage($request->file('image'), $Provider->image);
        }

        $data['status'] = ($request->input('status') == 'on') ? true : false;
        $provider->update($data);
        flash('Update Provider success!', 'success');
        return redirect('admin/providers');
    }

    public function destroy($id)
    {
        $provider = Provider::find($id);
        if (file_exists(public_path('files/' . $provider->image_preview))) {
            @unlink(public_path('files/' . $provider->image_preview));
        }
        $provider->delete();
        flash('Success deleted provider!');
        return redirect('admin/providers');
    }
}
