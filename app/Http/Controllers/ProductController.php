<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();
        // dd($products);
        return view('Admin.Barang.barangIndex', compact('products', 'user'), ['title' => 'List Product', 'active' => 'barang']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $user = Auth::user();
        return view('Admin.Barang.createBarang',['categories' => $categories, 'user' => $user, 'title' => 'Create Product', 'active' => 'barang']);
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
            'namabarang' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('product_img', 'public');
        }

        $product = new Product;
        $product->namaproduct = $request->get('namabarang');
        $product->deskripsi = $request->get('deskripsi');
        $product->stock = $request->get('stock');
        $product->harga = $request->get('harga');
        $product->gambar = $image_name;
        
        $kategori = new Category;
        $kategori->idkategori = $request->get('kategori');

        $product->category_id()->associate($kategori);
        $product->save();

        Alert::success('Penambahan Sukses', 'Penambahan Product Berhasil');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('category_id')->where('idproduct', $id)->first();
        $user = Auth::user();
        return view('Admin.Barang.detailBarang', compact('product', 'user'), ['title' => 'Detail Product', 'active' => 'barang']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('category_id')->where('idproduct', $id)->first();
        $categori = Category::all();
        $user = Auth::user();
        return view('Admin.Barang.updateBarang', compact('product', 'user', 'categori'), ['title' => 'Edit Product', 'active' => 'barang']);
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
        $request->validate([
            'namabarang' => 'required',
            'deskripsi' => 'required',
            'stock' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('product_img', 'public');
        }

        $product = Product::with('category_id')->where('idproduct', $id)->first();
        $product->namaproduct = $request->get('namabarang');
        $product->deskripsi = $request->get('deskripsi');
        $product->stock = $request->get('stock');
        $product->harga = $request->get('harga');
        $product->gambar = $image_name;
        // $product->save();
        
        $kategori = new Category;
        $kategori->idkategori = $request->get('kategori');

        $product->category_id()->associate($kategori);
        $product->save();

        Alert::success('Berhasil Edit', 'Product Berhasil di Edit');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('idproduct', $id)->delete();
        Alert::success('Berhasil Hapus', 'Product Berhasil di Hapus');
        return redirect()->route('products.index');
    }
}
