<?php

/*
 * Logic Functions
 * All Site function must be put in here for easy control
 */
namespace App\Deal;

use App\Account;
use App\Category;
use App\Provider;
use App\Deal;

use App\Product;
use Carbon\Carbon;
use Excel;
use DB;


class Functions
{
    public static function getProvidersByAdmin()
    {
        if(!cache()->has('categories-provider-admin'))
        {
            $providers = Provider::whereIn('alias', [
                'lazada',
                'tiki',
                'adayroi'
            ])->get();
            cache()->put('categories-provider-admin', $providers, 100);
            return $providers;
        }
        return cache()->get('categories-provider-admin');
    }

    public static function getCategories()
    {
        if(!cache()->has('categories'))
        {
            $categories = Category::all();
            cache()->put('categories', $categories, 100);
            return $categories;
        }
        return cache()->get('categories');
    }

    public static function countDealByProvider($provider)
    {
        if(!cache()->has('count-provider-'.$provider))
        {
            $cnt = Deal::where('source', $provider)->count();
            cache()->put('count-provider-'.$provider, $cnt, 20);
            return $cnt;
        }
        return cache()->get('count-provider-'.$provider);
    }

    public static function countProductByProvider($provider)
    {
        if(!cache()->has('count-product-'.$provider))
        {
            $cnt = Product::where('source', $provider)->count();
            cache()->put('count-product-'.$provider, $cnt, 20);
            return $cnt;
        }
        return cache()->get('count-product-'.$provider);
    }

    public static function getCategoryByProvider($provider)
    {
        if(!cache()->has('categories-provider'))
        {
            $categories = Category::where('provider', $provider);
            cache()->put('categories-provider', $categories, 100);
            return $categories;
        }
        return cache()->get('categories-provider');
    }

    public static function getRandomDeals()
    {
        $deals = Deal::inRandomOrder()->where('valid_to', '>=', Carbon::now()->toDateTimeString())->orWhere('valid_to', '')->limit(2)->get();
        return $deals;
    }

    public static function getRandomProducts()
    {

    }

    public static function getProviders()
    {
        if(!cache()->has('providers'))
        {
            $providers = Provider::all();
            cache()->put('providers', $providers, 3000);
            return $providers;
        }
        return cache()->get('providers');
    }

    public static function getLatestDeals()
    {
        if(!cache()->has('latestDeals'))
        {
            $latestDeals = Deal::inRandomOrder()->limit(9)->orderBy('id', 'desc')->get();
            cache()->put('latestDeals', $latestDeals, 60);
            return $latestDeals;
        }
        return cache()->get('latestDeals');
    }

    public static function getLatestProducts()
    {
        if(!cache()->has('latestProducts'))
        {
            $latestProducts = Product::inRandomOrder()->limit(12)->orderBy('id', 'desc')->get();
            cache()->put('latestProducts', $latestProducts, 100);
            return $latestProducts;
        }
        return cache()->get('latestProducts');
    }



    public static function importDataFeedProductCSV($file)
    {
        Excel::load($file, function($reader) {
            $results = $reader->all()->toArray();

            foreach($results as  $value)
            {
                try {
                    Product::create([
                        'name' => !empty($value['productname']) ? $value['productname'] : '',
                        'price' => !empty($value['price']) ? $value['price'] : 0,
                        'source' => !empty($value['offerid']) ? Provider::where('alias',$value['offerid'])->first()->id : '',
                        'image_preview' => !empty($value['thumbnail']) ? $value['thumbnail'] : '',
                        'account_id' => 0,
                        'status' => 1,
                        'product_url' => !empty($value['producturl']) ? $value['producturl'] : '',
                        'aff_link' => !empty($value['affiliatelink']) ? $value['affiliatelink'] : '',
                        'product_version' => !empty($value['productversion']) ? $value['productversion'] : '',
                        'alias' => !empty($value['offerid']) ? $value['offerid'] : 'no_name'

                    ]);
                } catch (Exception $ex)
                {
                    dd($ex->getMessage());
                }
            }
        });
    }


    public static function importDealCSV($file)
    {
        Excel::load($file, function($reader) {
            $results = $reader->all()->toArray();

            foreach($results as  $value)
            {

                try {
                    Deal::create([
                        'name' => !empty($value['campaign']) ? $value['campaign'] : '',
                        'account_id' => 1,
                        'description' => !empty($value['mo_ta']) ? $value['mo_ta'] : '',
                        'valid_from' => !empty($value['start']) ? Carbon::createFromFormat('d/m/Y', $value['start'])->toDateTimeString() : Carbon::now()->toDateTimeString(),
                        'valid_to' => !empty($value['end']) ? Carbon::createFromFormat('d/m/Y', $value['end'])->toDateTimeString() : '',
                        'original_price'=>'',
                        'new_price'=>'',
                        'lat' => '',
                        'lng' => '',
                        'location' => '',
                        'is_hot' => 1,
                        'code' => !empty($value['ma_giam_gia']) ? $value['ma_giam_gia'] : '',
                        'online_url' => !empty($value['link_goc']) ? $value['link_goc'] : '',
                        'image_preview' => !empty($value['banner']) ? $value['banner'] : '',
                        'status' => 1,
                        'category_id' => 1,
                        'source' => !empty($value['offer_id']) ? Provider::where('alias',$value['offer_id'])->first()->id : 0,
                        'condition' => !empty($value['dieu_kien_ap_dung']) ? $value['dieu_kien_ap_dung'] : '',
                        'category_name' => !empty($value['nganh_hang']) ? $value['nganh_hang'] : '',
                        'alias' => !empty($value['offer_id']) ? $value['offer_id'] : 'no_name'
                    ]);
                } catch (Exception $ex)
                {
                    dd($ex->getMessage());
                }
            }
        });
    }
}