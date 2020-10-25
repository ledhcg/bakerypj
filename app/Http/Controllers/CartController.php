<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;
use Session;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request) {
        $product_id = $request->product_id;
        $quantity = $request->product_quantity;

        $product = DB::table('tbl_product')->where('id', $product_id)->first();
        $data = array();
        $data['id'] = $product_id;
        $data['qty'] = $quantity;
      
        $data['name'] = $product->product_name;
        $data['price'] = $product->product_unit_price;
        $data['weight'] = $product->product_size;
        $data['option']['sale_price'] = $product->product_sale_price;
        $data['option']['image'] = $product->product_image;
        $data['option']['brand'] = $product->brand_id;
        $data['option']['category'] = $product->category_id;
        

        Cart::add($data);

        return view('pages.cart.show_cart');
    }

    public function show_cart(){

        $category = DB::table('tbl_product_category')->get();
        $brand = DB::table('tbl_brand')->get();

        return Redirect::to('pages.cart.show_cart')->with('category', $category)->with('brand', $brand);
    }
}
