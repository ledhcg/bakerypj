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



//Frontend
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');



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
Route::get('/show_all_product_categories', 'ProductCategoryController@show_all_product_categories');
Route::get('/edit_product_category/{product_category_id}', 'ProductCategoryController@edit_product_category');
Route::get('/delete_product_category/{product_category_id}', 'ProductCategoryController@delete_product_category');

Route::get('/active_product_category/{product_category_id}', 'ProductCategoryController@active_product_category');
Route::get('/inactive_product_category/{product_category_id}', 'ProductCategoryController@inactive_product_category');

Route::post('/save_new_product_category', 'ProductCategoryController@save_new_product_category');
Route::post('/update_product_category/{product_category_id}', 'ProductCategoryController@update_product_category');

//Brands
Route::get('/add_brand', 'BrandController@add_brand');
Route::get('/show_all_brands', 'BrandController@show_all_brands');
Route::get('/edit_brand/{brand_id}', 'BrandController@edit_brand');
Route::get('/delete_brand/{brand_id}', 'BrandController@delete_brand');

Route::get('/active_brand/{brand_id}', 'BrandController@active_brand');
Route::get('/inactive_brand/{brand_id}', 'BrandController@inactive_brand');

Route::post('/save_new_brand', 'BrandController@save_new_brand');
Route::post('/update_brand/{brand_id}', 'BrandController@update_brand');

//Products
Route::get('/add_product', 'ProductController@add_product');
Route::get('/show_all_products', 'ProductController@show_all_products');
Route::get('/edit_product/{product_id}', 'ProductController@edit_product');
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');

Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::get('/inactive_product/{product_id}', 'ProductController@inactive_product');

Route::post('/save_new_product', 'ProductController@save_new_product');
Route::post('/update_product/{product_id}', 'ProductController@update_product');


//clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});