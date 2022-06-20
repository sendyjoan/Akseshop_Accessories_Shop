<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id){
        $product = Product::where('idproduct', $id)->first();
        // dd($product);
        return view('User/detailProduct', compact('product'));
    }


    public function index()
    {
         $user = Auth::user();

         if ($user->role_id_idrole === 2) {
             return redirect()->route('/');
        }
        // return view('User/index');
    }


    
}
