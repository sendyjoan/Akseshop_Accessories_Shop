@extends('layouts.AdminLayout')

@section('content')

<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <h6 class="mb-4">Tambah Barang</h6>
                <form action="/dashboard/products" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="namabarang" placeholder="Nama Barang">
                        <label for="floatingInput">Nama Barang</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="deskripsi" placeholder="Deskripsi">
                        <label for="floatingInput">Deskripsi Barang</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingNumber" placeholder="Stock" name="stock">
                        <label for="floatingNumber">Stock</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingPrice" placeholder="Harga Barang" name="harga">
                        <label for="floatingPrice">Harga Barang</label>
                    </div>
                    <div class="mb-3">
                        <input class="form-control bg-dark" type="file" id="formFile" name="gambar" required="required">
                    </div>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Simpan</button> 
                </form>
            </div>
        </div>
        </div>
    
</div>
@endsection