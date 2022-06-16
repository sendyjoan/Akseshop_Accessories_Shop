@extends('layouts.AdminLayout')

@section('content')

<div class="container-fluid pt-4 px-4"> 
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Daftar Barang</h6>
                <a class="btn btn-success mt-3" href="#">Tambah Barang</a> 
        </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr >
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                    </table>
            </div>
                        
    </div>  

</div>                           
@endsection