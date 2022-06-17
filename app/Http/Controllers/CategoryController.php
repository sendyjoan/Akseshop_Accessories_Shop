<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('Admin/Kategori/kategoriIndex', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin/kategori/createKategori',['title' => 'List Kategori', 'active' => 'kategori']);
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
            'kategori' => 'required',
        ]);


        $categories = new Category;
        $categories->namakategori = $request->get('kategori');
        $categories->save();

        //  Category::create($request->all());
    

        return redirect()->route('categories.index',['title' => ' Create Kategori', 'active' => 'kategori']);
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
        $request->validate([
            'namakategori' => 'required',
        ]);

        $categories = Category::where('idkategori', $id)->first();
        $categories->namakategori = $request->get('namakategori');
        // $product->save();
        
        $kategori = new Category;
        $kategori->idkategori = $request->get('kategori');

        $product->category_id()->associate($kategori);
        $product->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('idkategori', $id)->delete();
        return redirect()->route('categories.index');
    }
}
