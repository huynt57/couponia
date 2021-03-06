<?php

namespace App\Http\Controllers\Frontend;

use App\Email;
use App\Garena\Functions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class MainController extends Controller
{

    /**
     * FrontendController constructor.
     */
    public function __construct()
    {
        //hard login
        //Functions::hardLogin();
       // $this->middleware('auth.frontend', ['except' => ['index']]);
    }

    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        echo "welcome, ".auth('frontend')->user()->username;
    }

    public function registerNewsEmail(Request $request)
    {
        $email =  $request->input('email');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return response([
                'status' => 0,
                'message' => 'Email không đúng định dạng',
            ]);
        }

        $check = Email::where('email', $email)->count();


        if($check > 0)
        {
            return response([
                'status' => 0,
                'message' => 'Email đã tồn tại',
            ]);
        }

        if (Email::create([
           'email' => $email
        ])) {
            return response([
                'status' => 1,
                'message' => 'Thành công',
            ]);
        }


    }

    public function homePage()
    {
        $providers =  \App\Deal\Functions::getProviders();
        $latestDeals = \App\Deal\Functions::getLatestDeals();
        $latestProducts = \App\Deal\Functions::getLatestProducts();
        return view('frontend.home', [
            'providers' => $providers,
            'latestDeals' => $latestDeals,
            'latestProducts' => $latestProducts
        ]);
    }


    public function search(Request $request)
    {

    }
}
