<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

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
        // dd($products);
        return view('Admin.Barang.barangIndex', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.barang.createBarang',['categories' => $categories]);
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
        return view('admin.barang.detailBarang', compact('product'));
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
        return view('admin/barang/updateBarang', compact('product', 'categori'));
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
        $product->save();
        
        $kategori = new Category;
        $kategori->idkategori = $request->get('kategori');

        $product->category_id()->associate($kategori);
        $product->save();

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
        return redirect()->route('products.index');
    }
}
