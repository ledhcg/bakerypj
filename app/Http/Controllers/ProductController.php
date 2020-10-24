<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class ProductController extends Controller
{
    public function checkAuth(){
        $check = Session::get('admin_id');
        if(!$check) return Redirect::to('/admin')->send();
    }


    public function add_product(){
        $this->checkAuth();
        $category = DB::table('tbl_product_category')->orderby('id', 'desc')->get();
        $brand = DB::table('tbl_brand')->orderby('id', 'desc')->get();
        return view('admin.add_product')->with('category', $category)->with('brand', $brand);
    }
    public function show_all_products(){
        $this->checkAuth();
        $all_products = DB::table('tbl_product')->get();
        $category = DB::table('tbl_product_category')->select('id', 'category_name')->get();
        $brand = DB::table('tbl_brand')->select('id', 'brand_name')->get();

        $manager_products = view('admin.show_all_products')->with('all_products', $all_products)->with('brand', $brand)->with('category', $category);

        return view('admin.dashboard')->with('show_all_products', $manager_products);
    }
    public function save_new_product(Request $request) {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['brand_id'] = $request->brand_id;
        $data['category_id'] = $request->category_id;
        $data['product_description'] = $request->product_description;
        $data['product_unit_price'] = $request->product_unit_price;
        $data['product_sale_price'] = $request->product_sale_price;
        $data['product_size'] = $request->product_size;
        $data['product_status'] = $request->product_status;
       
        $data['created_at'] = new \DateTime();

        
        $get_image = $request->file('product_image');
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/products', $new_image);
            $data['product_image'] = $new_image;
        } else {
            $data['product_image'] = "";
        }
        
        
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
        
        $this->checkAuth();
        $edit_product = DB::table('tbl_product')->where('tbl_product.id', $product_id)->get();
        $category = DB::table('tbl_product_category')->get();
        $brand = DB::table('tbl_brand')->get();
        $manager_products = view('admin.edit_product')->with('edit_product', $edit_product)->with('category', $category)->with('brand', $brand);

        return view('admin.dashboard')->with('edit_product', $manager_products);
    
    }
    public function update_product(Request $request, $product_id){
        $data = array();
     

        $data['product_name'] = $request->product_name;
        $data['brand_id'] = $request->brand_id;
        $data['category_id'] = $request->category_id;
        $data['product_description'] = $request->product_description;
        $data['product_unit_price'] = $request->product_unit_price;
        $data['product_sale_price'] = $request->product_sale_price;
        $data['product_size'] = $request->product_size;
        $data['product_status'] = $request->product_status;
       
        $data['updated_at'] = new \DateTime();

        $get_image = $request->file('product_image');
       
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/products', $new_image);
            $data['product_image'] = $new_image;

            DB::table('tbl_product')->where('id', $product_id)->update($data);
            Session::put('message', 'Update product successfully!');
            return Redirect::to('show_all_products');

        } 
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
