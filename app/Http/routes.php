<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/categories', ['as' => 'admin/categories', 'uses' => 'CategoriesController@index']);
Route::get('admin/categories/create', ['as' => 'admin/categories/create', 'uses' => 'CategoriesController@create']);
Route::get('admin/categories/edit/{id}', ['as' => 'admin/categories/edit', 'uses' => 'CategoriesController@edit']);
Route::post('admin/categories/store', ['as' => 'admin/categories/store', 'uses' => 'CategoriesController@store']);
Route::post('admin/categories/update/{id}', ['as' => 'admin/categories/update', 'uses' => 'CategoriesController@update']);

Route::get('admin/products', ['as' => 'admin/products', 'uses' => 'ProductsController@index']);
Route::get('admin/products/create', ['as' => 'admin/products/create', 'uses' => 'ProductsController@create']);
Route::get('admin/products/edit/{id}', ['as' => 'admin/products/edit', 'uses' => 'ProductsController@edit']);
Route::post('admin/products/store', ['as' => 'admin/products/store', 'uses' => 'ProductsController@store']);
Route::post('admin/products/update/{id}', ['as' => 'admin/products/update', 'uses' => 'ProductsController@update']);