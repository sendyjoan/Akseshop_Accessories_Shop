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
        return view('Admin/Kategori/kategoriIndex', compact('categories'),['title' => ' List Kategori', 'active' => 'kategori']);
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
    

        return redirect()->route('categories.index');
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
        $categories=Category::where('idkategori', $id)->first();
        return view('admin.kategori.updateKategori', compact('categories'),['title' => ' Update Kategori', 'active' => 'kategori']);
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
        $categories->save();

        

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
