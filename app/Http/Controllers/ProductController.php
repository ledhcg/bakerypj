<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        return view('admin.add_product');
    }
    public function show_all_products(){
        $all_products = DB::table('tbl_product')->get();
        $manager_products = view('admin.show_all_products')->with('all_products', $all_products);

        return view('admin.dashboard')->with('show_all_products', $manager_products);
    }
    public function save_new_product(Request $request) {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_brand'] = $request->product_brand;
        $data['product_description'] = $request->product_description;
        $data['product_unit_price'] = $request->product_unit_price;
        $data['product_sale_price'] = $request->product_sale_price;
        $data['product_size'] = $request->product_size;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_image;
        $data['created_at'] = new \DateTime();

        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Add new product successfully!');
        return Redirect::to('add_product');
    }

    public function inactive_product($product_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_product')->where('id', $product_id)->update(['product_status'=>0]);
        DB::table('tbl_product')->where('id', $product_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_products');
    }

    public function active_product($product_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_product')->where('id', $product_id)->update(['product_status'=>1]);
        DB::table('tbl_product')->where('id', $product_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_products');
    }

    public function edit_product($product_id){
        $edit_product = DB::table('tbl_product')->where('id', $product_id)->get();
        $manager_products = view('admin.edit_product')->with('edit_product', $edit_product);

        return view('admin.dashboard')->with('edit_product', $manager_products);
    }
    public function update_product(Request $request, $product_id){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_brand'] = $request->product_brand;
        $data['product_description'] = $request->product_description;
        $data['product_unit_price'] = $request->product_unit_price;
        $data['product_sale_price'] = $request->product_sale_price;
        $data['product_size'] = $request->product_size;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_image;
        $data['updated_at'] = new \DateTime();


        
        DB::table('tbl_product')->where('id', $product_id)->update($data);
        Session::put('message', 'Update product successfully!');
        return Redirect::to('show_all_products');
    }

    public function delete_product($product_id){
        DB::table('tbl_product')->where('id', $product_id)->delete();
        Session::put('message', 'Delete product successfully!');
        return Redirect::to('show_all_products');
    }
}
