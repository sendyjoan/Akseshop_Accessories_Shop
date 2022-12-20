<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $user = Auth::user();
        // dd($categories);
        return view('Admin/Kategori/kategoriIndex', compact('categories', 'user'),['title' => ' List Kategori', 'active' => 'kategori']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('Admin.Kategori.createKategori',['title' => 'List Kategori', 'active' => 'kategori', 'user' => $user]);
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
    
        Alert::success('Penambahan Berhasil', 'Kategori Berhasil Ditambahkan');
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
        $user = Auth::user();
        return view('Admin.Kategori.updateKategori', compact('categories', 'user'),['title' => ' Update Kategori', 'active' => 'kategori']);
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

        
        Alert::success('Berhasil Di Edit', 'Kategori Berhasil Di Edit');
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
        Alert::success('Kategori Dihapus', 'Kategori Berhasil Dihapus');
        return redirect()->route('categories.index');
    }
}
