<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class ProductCategoryController extends Controller
{
    public function add_product_category(){
        return view('admin.add_product_category');
    }
    public function show_all_products_categories(){
        $all_categories = DB::table('tbl_product_category')->get();
        $manager_products_categories = view('admin.show_all_products_categories')->with('all_categories', $all_categories);

        return view('admin.dashboard')->with('show_all_products_categories', $manager_products_categories);
    }
    public function save_new_product_category(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['category_status'] = $request->category_status;
        $data['category_image'] = $request->category_image;
        $data['created_at'] = new \DateTime();
        DB::table('tbl_product_category')->insert($data);
        Session::put('message', 'Add new product category successfully!');
        return Redirect::to('add_product_category');
    }

    public function inactive_product_category($product_category_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['category_status'=>0]);
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_products_categories');
    }

    public function active_product_category($product_category_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['category_status'=>1]);
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_products_categories');
    }

    public function edit_product_category($product_category_id){
        $edit_product_category = DB::table('tbl_product_category')->where('id', $product_category_id)->get();
        $manager_products_categories = view('admin.edit_product_category')->with('edit_product_category', $edit_product_category);

        return view('admin.dashboard')->with('edit_product_category', $manager_products_categories);
    }
    
}
