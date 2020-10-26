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

        

        Cart::add(['id' => $product_id, 'name' => $product->product_name, 'qty' => $quantity, 'price' => $product->product_unit_price, 'weight' => 0, 'options' => ['image' => $product->product_image]]);
        return view('pages.cart.show_cart');
    }
    public function remove_cart_item($item_rowid){
        Cart::remove($item_rowid);
        return Redirect::to('/show_cart');
    }
    public function show_cart(){

        $product = DB::table('tbl_product')->get();
        return view('pages.cart.show_cart')->with('product', $product);
    }
}
