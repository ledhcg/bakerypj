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
    public function show_all_product_categories(){
        $all_categories = DB::table('tbl_product_category')->get();
        $manager_product_categories = view('admin.show_all_product_categories')->with('all_categories', $all_categories);

        return view('admin.dashboard')->with('show_all_product_categories', $manager_product_categories);
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
        return Redirect::to('show_all_product_categories');
    }

    public function active_product_category($product_category_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['category_status'=>1]);
        DB::table('tbl_product_category')->where('id', $product_category_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_product_categories');
    }

    public function edit_product_category($product_category_id){
        $edit_product_category = DB::table('tbl_product_category')->where('id', $product_category_id)->get();
        $manager_product_categories = view('admin.edit_product_category')->with('edit_product_category', $edit_product_category);

        return view('admin.dashboard')->with('edit_product_category', $manager_product_categories);
    }
    public function update_product_category(Request $request, $product_category_id){
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_description'] = $request->category_description;
        $data['category_status'] = $request->category_status;
        $data['category_image'] = $request->category_image;
        $data['updated_at'] = new \DateTime();
        DB::table('tbl_product_category')->where('id', $product_category_id)->update($data);
        Session::put('message', 'Update product category successfully!');
        return Redirect::to('show_all_product_categories');
    }

    public function delete_product_category($product_category_id){
        DB::table('tbl_product_category')->where('id', $product_category_id)->delete();
        Session::put('message', 'Delete product category successfully!');
        return Redirect::to('show_all_product_categories');
    }
}
