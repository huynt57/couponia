<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Deal;
use App\Provider;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Requests\DealRequest;
use Carbon\Carbon;

class DealsController extends AdminController
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
        $searchDeal = '';
        $deals = Deal::latest('updated_at');
        if ($request->input('q')) {
            $searchDeal = urldecode($request->input('q'));
            $deals = $deals->where('name', 'LIKE', '%'. $searchDeal. '%');
        }


        $deals = $deals->paginate(env('ITEM_PER_PAGE'));

        return view('admin.deal.index', compact('deals', 'searchDeal'));
    }

    public function create()
    {
        $providers = $this->providers;
        return view('admin.deal.form', compact('providers'));
    }

    public function store(DealRequest $request)
    {
        $data = $request->all();
        $data['image_preview'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        $data['status'] = ($request->input('status') == 'on') ? true : false;

        $data['valid_from'] = !empty($request->input('valid_from')) ? Carbon::createFromFormat('d/m/Y', $request->input('valid_from') )->toDateTimeString() : Null;
        $data['valid_to'] = !empty($request->input('valid_to')) ? Carbon::createFromFormat('d/m/Y', $request->input('valid_to') )->toDateTimeString() : Null;

        try {
            Deal::create($data);
        } catch(\Exception $ex)
        {
            return redirect('admin/deals');
        }
        flash('Create Deal success!', 'success');
        return redirect('admin/deals');
    }

    public function edit($id)
    {
        $deal = Deal::find($id);
        $providers = $this->providers;
        return view('admin.deal.form', compact('providers', 'deal'));
    }

    public function update($id, DealRequest $request)
    {
        $data = $request->all();
        $deal = Deal::find($id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image_preview'] = $this->saveImage($request->file('image'), $deal->image);
        }
        $data['valid_from'] = !empty($request->input('valid_from')) ? Carbon::createFromFormat('Y-m-d H:i:s', $request->input('valid_from') )->toDateTimeString() : Null;
        $data['valid_to'] = !empty($request->input('valid_to')) ? Carbon::createFromFormat('Y-m-d H:i:s', $request->input('valid_to') )->toDateTimeString() : Null;

        $data['status'] = ($request->input('status') == 'on') ? true : false;
        $deal->update($data);
        flash('Update Deal success!', 'success');
        return redirect('admin/deals');
    }

    public function destroy($id)
    {
        $deal = Deal::find($id);
        if (file_exists(public_path('files/' . $deal->image_preview))) {
            @unlink(public_path('files/' . $deal->image_preview));
        }
        $deal->delete();
        flash('Success deleted deal!');
        return redirect('admin/deals');
    }
}
