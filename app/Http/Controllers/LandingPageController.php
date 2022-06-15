<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingpage(){
        return view('User/index');
    }

    public function aboutus(){
        return view('User/About');
    }

    public function product(){
        return view('User/product');
    }
}
