<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $charts = Chart::with('product_id')->where('user_id_id', $user)->get();
        // dd($charts);
        return view('User/chart', compact('charts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iduser = Auth::user()->id;
        $product = Product::where('idproduct', $request->idproduct)->first();

        $chart = new Chart;
        $chart->quantity = 1;
        $chart->subtotal = $chart->quantity * $product->harga;
        $chart->status = 0;

        $user = new User;
        $user->id = $iduser;

        $product = new Product;
        $product->idproduct = $request->idproduct;

        $chart->user_id()->associate($user);
        $chart->product_id()->associate($product);

        $chart->save();

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
