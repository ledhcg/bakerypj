<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class BrandController extends Controller
{
    public function checkAuth(){
        $check = Session::get('admin_id');
        if(!$check) return Redirect::to('/admin')->send();
    }


    public function add_brand(){
        $this->checkAuth();
        return view('admin.add_brand');
    }
    public function show_all_brands(){
        $this->checkAuth();
        $all_brands = DB::table('tbl_brand')->get();
        $manager_brands = view('admin.show_all_brands')->with('all_brands', $all_brands);

        return view('admin.dashboard')->with('show_all_brands', $manager_brands);
    }
    public function save_new_brand(Request $request) {
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        $data['brand_status'] = $request->brand_status;
       
        $data['created_at'] = new \DateTime();

        
        $get_image = $request->file('brand_image');
        
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        if($get_image){
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/brands', $new_image);
        }
        $data['brand_image'] = $new_image;

        DB::table('tbl_brand')->insert($data);
        Session::put('message', 'Add new brand successfully!');
        return Redirect::to('add_brand');
    }

    public function inactive_brand($brand_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_brand')->where('id', $brand_id)->update(['brand_status'=>0]);
        DB::table('tbl_brand')->where('id', $brand_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_brands');
    }

    public function active_brand($brand_id){
        $timeUpdated = new \DateTime();
        DB::table('tbl_brand')->where('id', $brand_id)->update(['brand_status'=>1]);
        DB::table('tbl_brand')->where('id', $brand_id)->update(['updated_at'=>$timeUpdated]);
        return Redirect::to('show_all_brands');
    }

    public function edit_brand($brand_id){
        $this->checkAuth();
        $edit_brand = DB::table('tbl_brand')->where('id', $brand_id)->get();
        $manager_brands = view('admin.edit_brand')->with('edit_brand', $edit_brand);

        return view('admin.dashboard')->with('edit_brand', $manager_brands);
    }
    public function update_brand(Request $request, $brand_id){
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_description'] = $request->brand_description;
        $data['brand_status'] = $request->brand_status;
        $data['brand_image'] = $request->brand_image;
        $data['updated_at'] = new \DateTime();


        
        DB::table('tbl_brand')->where('id', $brand_id)->update($data);
        Session::put('message', 'Update brand successfully!');
        return Redirect::to('show_all_brands');
    }

    public function delete_brand($brand_id){
        DB::table('tbl_brand')->where('id', $brand_id)->delete();
        Session::put('message', 'Delete brand successfully!');
        return Redirect::to('show_all_brands');
    }
}
