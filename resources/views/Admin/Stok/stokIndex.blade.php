@extends('layouts.AdminLayout')

@section('content')


<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h6 class="mb-4">Add Stock Barang</h6>
                    <select name="namabarang" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                <option selected>Barang</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>      
                    </select>
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