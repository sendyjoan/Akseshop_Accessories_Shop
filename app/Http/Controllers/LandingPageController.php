<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage(){
        $products = Product::offset(0)->limit(4)->get();
        return view('User/index', compact('products'));
    }

    public function aboutus(){
        return view('User/About');
    }

    public function product(){
        $products = Product::all();
        return view('User/product', compact('products'));
    }

    public function show($id){
        $product = Product::where('idproduct', $id)->first();
        // dd($product);
        return view('User/detailProduct', compact('product'));
    }
}
