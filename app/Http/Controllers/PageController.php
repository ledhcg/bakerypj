<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product = Product::where('new', 1)->get();
        //return view('page.home', ['slide'=>$slide]);
        return view('page.home', compact('slide', 'new_product'));
    }
    public function getProductType(){
        return view('page.product_type');
    }
    public function getProduct(){
        return view('page.product');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function getAbout(){
        return view('page.about');
    }
    
}
