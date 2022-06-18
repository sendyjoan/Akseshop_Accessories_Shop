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
        return view('User/product');
    }
}
