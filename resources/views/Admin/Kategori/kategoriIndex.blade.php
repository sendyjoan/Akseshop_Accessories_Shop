@extends('layouts.AdminLayout')

@section('content')


<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">List Kategori Barang</h6>
                        <a class="btn btn-success mt-3" href="#">Tambah Kategori Barang</a> 
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->namakategori }}</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

@endsection


