@extends('layouts.AdminLayout')

@section('content')


<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <form action="{{ route('addstok.update', $product->idproduct)}}" method="post">
                    @csrf
                    @method('PUT')
                    <h3>Tambah Stok Pada Produk : <br> {{ $product->namaproduct}}</h3>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingNumber" placeholder="Stock" name="stock">
                        <label for="floatingNumber">Stock</label>
                    </div>
    
                    <button class="btn btn-success mt-3" type="submit" name="submit">Simpan</button>
                    <a class="btn btn-success mt-3" href="#">Kembali</a> 
                </form>
            </div>
        </div>
        </div>
    
</div>

@endsection