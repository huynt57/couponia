<?php

/*
 * Logic Functions
 * All Site function must be put in here for easy control
 */
namespace App\Deal;

use App\Account;
use App\Category;
use App\Provider;

use App\Product;
use Goutte;
use Excel;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;

class Functions
{
    public static function getCategories()
    {
        if(!cache()->has('categories'))
        {
            $categories = Category::all();
            cache()->set('categories', $categories);
            return $categories;
        }
        return cache()->get('categories');
    }

    public static function getCategoryByProvider($provider)
    {
        if(!cache()->has('categories-provider'))
        {
            $categories = Category::where('provider', $provider);
            cache()->set('categories', $categories);
            return $categories;
        }
        return cache()->get('categories-provider');
    }

    public static function getProviders()
    {
        if(!cache()->has('providers'))
        {
            $providers = Provider::all();
            cache()->set('providers', $providers);
            return $providers;
        }
        return cache()->get('providers');
    }

    public static function crawl()
    {
        $url = 'https://pub.masoffer.com/sign-in';

        $client = new Client();

        $client = $client->request('GET', $url);

        $crawler = new Crawler($client->getBody()->getContents());

        $crawler->selectImage("Đăng nhập")->image();

        dd($crawler);

    }

    public static function importDataFeedProductCSV($file)
    {
        Excel::load($file, function($reader) {
            $results = $reader->all()->toArray();

            foreach($results as  $value)
            {
                Product::create([
                    'name' => !empty($value['productname']) ? $value['productname'] : '',
                    'price' =>!empty($value['price']) ? $value['price'] : 0,
                    'source' => !empty($value['offerid']) ? $value['offerid'] : '',
                    'image_preview' => !empty($value['thumbnail']) ? $value['thumbnail'] : '',
                    'account_id' => 0,
                    'status' => 1,
                    'product_url' => !empty($value['producturl']) ? $value['producturl'] : '',
                    'aff_link' => !empty($value['affiliatelink']) ? $value['affiliatelink'] : '',
                    'product_version' => !empty($value['productversion']) ? $value['productversion'] : '',
                ]);
            }
        });
    }
}