<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


#Admin Routes
Route::get('admin/login', 'Backend\AuthController@redirectToGoogle');
Route::get('admin/logout', 'Backend\AuthController@logout');
Route::get('admin/callback', 'Backend\AuthController@handleGoogleCallback');


Route::get('admin', 'Backend\HomeController@index');
Route::resource('admin/posts', 'Backend\PostsController');
Route::resource('admin/categories', 'Backend\CategoriesController');

#Frontend Routes
Route::get('/', 'Frontend\MainController@index');
Route::get('home', 'Frontend\MainController@home');
Route::get('login', 'Frontend\AuthController@redirectToAuthServer');
Route::get('logout', 'Frontend\AuthController@logout');
Route::get('callback', 'Frontend\AuthController@callback');

Route::get('khuyen-mai/{id}', 'Frontend\DealController@getDealById');
Route::get('khuyen-mai/danh-muc/{id}', 'Frontend\DealController@getDealsByCategory');
Route::get('khuyen-mai/nha-phan-phoi/{source}', 'Frontend\DealController@getDealsBySource');


Route::get('san-pham', 'Frontend\ProductController@getAllProducts');




Route::get('crawl', 'Frontend\DealController@crawl');

