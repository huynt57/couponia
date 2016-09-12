<?php

/*
 * Logic Functions
 * All Site function must be put in here for easy control
 */
namespace App\Deal;

use App\Account;
use App\Category;

use App\Product;
use Goutte;
use Maatwebsite\Excel\Facades\Excel;

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

    public static function crawl()
    {
        $crawler = Goutte::request('GET', 'http://www.tinkhuyenmaihot.com/dscp_LAZADA/ma-giam-gia-lazada.html');



        $crawler->filter('.read_more_link > a')->each(function($node) {
            echo $node->attr('href') . '<br>';
        });

        $url = $crawler->filter('h1')->each(function($node) {
            echo $node->text(). '<br>';
        });
        dd($url);

    }

    public static function importDataFeedProductCSV($file)
    {
        Excel::load($file, function($reader) {
            $results = $reader->all()->toArray();

            foreach($results as $key => $value)
            {
                Product::create([
                    'name' => isset($value['ProductName']) ? $value['ProductName'] : '',
                    'price' => isset($value['Price']) ? $value['Price'] : '',
                    'source' => isset($value['OfferId']) ? $value['OfferId'] : '',
                    'image_preview' => isset($value['name']) ? $value['name'] : '',
                    'status' => 1,
                    'product_url' => isset($value['ProductUrl']) ? $value['ProductUrl'] : '',
                    'aff_link' => isset($value['AffiliateLink']) ? $value['AffiliateLink'] : '',
                    'product_version' => isset($value['ProductVersion']) ? $value['ProductVersion'] : '',
                ]);
            }
        });
    }
}