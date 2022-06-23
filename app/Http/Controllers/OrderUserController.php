<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Order_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $charts = Chart::with('product_id')->where('user_id_id', $user)->where('status', 0)->get();
        return view('User/checkout', compact('charts'), ['total' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $charts = Chart::with('product_id')->where('user_id_id', $user)->where('status', 0)->get();
        // orderby('created_at', 'desc')->first();
        // dd($charts);
        $total = 0;
        // dd($charts);
       
        return view('User/payment', compact('charts'), ['total' => $total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'buktipembayaran' => 'required',
            'total' => 'required',
        ]);

        if ($request->file('buktipembayaran')) {
            $image_name = $request->file('buktipembayaran')->store('payment_img', 'public');
        }

        $user = Auth::user()->id;

        $order = new Order;
        $order->totaluser = $request->get('total');
        $order->buktipembayaran = $image_name;
        $order->user_id()->associate($user);
        $order->save();

        $charts = Chart::with('product_id')->where('user_id_id', $user)->where('status', 0)->get();

        
        foreach ($charts as $chart) {
            $order_detail = new Order_Detail;
            $order_detail->qty = $chart->quantity;
            $order_detail->subtotal = $chart->subtotal;
            $order_detail->order_id()->associate($order->idorder);
            $product = $chart->product_id_idproduct;
            $product = Product::where('idproduct', $product)->first();
            $order_detail->product_id()->associate($product->idproduct);
            $order_detail->save();
            $chart->status = 1;
            $chart->save();
        }
        
        return redirect()->route('checkout.show', $order->idorder);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order_Detail::where('order_id_idorder', $id)->get();
        return view('User/tampilanStruk', compact('orders'), ['ido' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak($id){
        $orders = Order_Detail::where('order_id_idorder', $id)->get();
        $pdf = PDF::loadview('user.checkoutPDF', ['orders' => $orders, 'total' => 0]);
        return $pdf->stream();
    }
}
