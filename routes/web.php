<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});






Route::get('index',[
    'as' => 'home-page',
    'uses' => 'PageController@getIndex',
]);

Route::get('product_type', [
    'as'=>'product_type',
    'uses'=> 'PageController@getProductType'
]);

Route::get('product', [
    'as'=>'product',
    'uses'=> 'PageController@getProduct',
]);

Route::get('contact', [
    'as'=>'contact',
    'uses'=> 'PageController@getContact',
]);

Route::get('about', [
    'as'=>'about',
    'uses'=> 'PageController@getAbout',
]);

//Backend - Admin

Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin_dashboard', 'AdminController@admin_dashboard');

//Product Categories
Route::get('/add_product_category', 'ProductCategoryController@add_product_category');
Route::get('/show_all_products_categories', 'ProductCategoryController@show_all_products_categories');
Route::get('/edit_product_category/{product_category_id}', 'ProductCategoryController@edit_product_category');
Route::get('/delete_product_category/{product_category_id}', 'ProductCategoryController@delete_product_category');

Route::get('/active_product_category/{product_category_id}', 'ProductCategoryController@active_product_category');
Route::get('/inactive_product_category/{product_category_id}', 'ProductCategoryController@inactive_product_category');

Route::post('/save_new_product_category', 'ProductCategoryController@save_new_product_category');


