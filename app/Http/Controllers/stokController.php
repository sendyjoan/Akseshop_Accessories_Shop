<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Add_Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stok = Add_Stock::all();
        // $user = Auth::user();
        // return view('Admin.Stok.stokIndex', compact('stok', 'user'), ['title' => 'Add Stock Product', 'active' => 'stock']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'jumlahStock' => 'required',
        ]);

        $add = new Add_Stock;
        $add->jumlah = $request->get('jumlahStock');
        $add->save();

        return redirect()->route('add.index');
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
        $user = Auth::user();
        $product = Product::where('idproduct', $id)->first();
        return view('admin.stok.stokindex', compact('user', 'product'), ['title' => 'Add Stock Product', 'active' => 'barang']);
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
        $user = Auth::user();

        $product = Product::where('idproduct', $id)->first();
        $product->stock += $request->get('stock');
        $product->save();

        $add = new Add_Stock;
        $add->jumlah = $request->get('stock');
        $add->user_id()->associate($user);
        $add->product_id()->associate($product);

        $add->save();
        Alert::success('Stock Ditambahkan', 'Penambahan Stock Berhasil');
        return redirect()->route('products.show', $id);
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
