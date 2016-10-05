<?php

return [
    1 => [
        'label' => 'Manager',
        'permission' => [
            'HomeController@index',

            'CategoriesController@index',
            'CategoriesController@create',
            'CategoriesController@edit',
            'CategoriesController@destroy',
            'CategoriesController@update',
            'CategoriesController@store',

            'PostsController@index',
            'PostsController@create',
            'PostsController@edit',
            'PostsController@destroy',
            'PostsController@update',
            'PostsController@store',

            'DealsController@index',
            'DealsController@create',
            'DealsController@edit',
            'DealsController@destroy',
            'DealsController@update',
            'DealsController@store',

            'ProvidersController@index',
            'ProvidersController@create',
            'ProvidersController@edit',
            'ProvidersController@destroy',
            'ProvidersController@update',
            'ProvidersController@store',

            'ProductsController@index',
            'ProductsController@create',
            'ProductsController@edit',
            'ProductsController@destroy',
            'ProductsController@update',
            'ProductsController@store',

        ]
    ],

    2 => [
        'label' => 'Editor',
        'permission' => [
            'HomeController@index',

            'CategoriesController@index',
            'CategoriesController@create',
            'CategoriesController@edit',
            'CategoriesController@destroy',
            'CategoriesController@update',
            'CategoriesController@store',

            'PostsController@index',
            'PostsController@create',
            'PostsController@edit',
            'PostsController@destroy',
            'PostsController@update',
            'PostsController@store',
        ]
    ]
];