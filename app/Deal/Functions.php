<?php

/*
 * Logic Functions
 * All Site function must be put in here for easy control
 */
namespace App\Deal;

use App\Account;
use App\Category;

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
}