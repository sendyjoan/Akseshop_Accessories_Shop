<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF; 

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $charts = Chart::with('product_id')->where('user_id_id', $user)->get();
        return view('User/checkout', compact('charts'), ['total' => 0]);
    }

    public function cetak_pdf(){

        $checkout = Order_Detail::all();
        $pdf = PDF::loadview('checkout.checkoutt_pdf',['checkout'=>$checkout]);
        return $pdf->stream();


    }
}
