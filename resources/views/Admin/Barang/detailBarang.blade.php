@extends('layouts.AdminLayout') 
@section('content') 


<div class="container  pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">  
        <div class="d-fl align-items-center justify-content-center mb-4">
                        <h6 class="mb-0">Detail Barang</h6>
        </div>

            <div class="container">
                 <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th>Nama Barang</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$product->namaproduct}}</td>
                                    <td>{{$product->deskripsi}}</td>
                                    <td>{{$product->category_id->namakategori}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>{{$product->harga}}</td>
                                    <td>{{$product->gambar}}</td>
                                </tr>
                            </tbody>   
                        </table>
                        <a class="btn btn-success mt-3" href="#">Kembali</a> 
                </div>
        </div>
    </div>
</div>
@endsection 