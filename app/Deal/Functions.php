<?php

/*
 * Logic Functions
 * All Site function must be put in here for easy control
 */
namespace App\Deal;

use App\Account;
use App\Category;

use Goutte;

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
      //  dd($url);

    }
}