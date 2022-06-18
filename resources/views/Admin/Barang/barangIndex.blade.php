@extends('layouts.AdminLayout')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Daftar Barang</h6>
                        <a class="btn btn-success mt-3" href="{{ route('products.create')}}">Tambah Barang</a> 
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->namaproduct}}</td>
                                        <td>{{ $product->stock}}</td>
                                        <td>{{ $product->harga}}</td>
                                        <td><a class="btn btn-sm btn-info" href="{{ route('products.show', $product->idproduct)}}">Detail</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('products.edit', $product->idproduct)}}">Update</a>
                                        <a class="btn btn-sm btn-primary" href="{{ route('',)}}">Add Stock</a>
                                        <form action="{{ route('products.destroy', ['product'=>$product->idproduct])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

@endsection