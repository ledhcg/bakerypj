<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $category = DB::table('tbl_product_category')->where('category_status','1')->get();
        $brand = DB::table('tbl_brand')->where('brand_status','1')->get();
        $product = DB::table('tbl_product')->where('product_status', '1')->get();
        $random_product = DB::table('tbl_product')->where('product_status', '1')->inRandomOrder()->get();
        return view('pages.home')->with('category', $category)->with('brand', $brand)->with('product', $product)->with('random_product', $random_product);
    }
}