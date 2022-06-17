@extends('layouts.AdminLayout')

@section('content')

<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <form action="{{ route('products.update', $product->idproduct)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h6 class="mb-4">Update Barang</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="namabarang" id="floatingInput"  placeholder="Nama Barang" value="{{ $product->namaproduct}}">
                        <label for="floatingInput">Nama Barang</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="deskripsi" id="floatingNumber" placeholder="Deskripsi Barang" value="{{ $product->deskripsi}}">
                        <label for="floatingNumber">Deskripsi Barang</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="stock" id="floatingNumber" placeholder="Stock" value="{{ $product->stock}}">
                        <label for="floatingNumber">Stock</label>
                    </div>
        
                        <select name="kategori" class="form-select mb-3" aria-label="Default select example">
                            @foreach ($categori as $ctg)
                                <option value="{{ $ctg->idkategori }}" {{ $product->category_id_idkategori == $ctg->idkategori ? 'selected' : ''}}>{{ $ctg->namakategori}}</option>
                            @endforeach
                        </select>

                    <div class="form-floating mb-3">
                        <input type="text" name="harga" class="form-control" id="floatingPrice" placeholder="Harga Barang" value="{{ $product->harga}}">
                        <label for="floatingPrice">Harga Barang</label>
                    </div>
                    <div class="mb-3">
                        <input class="form-control bg-dark" type="file" id="formFile" name="gambar" required="required">
                    </div>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Update</button> 
                </form>
            </div>
        </div>
        </div>
    
</div>
@endsection