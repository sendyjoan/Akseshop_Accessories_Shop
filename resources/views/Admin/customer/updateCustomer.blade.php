@extends('layouts.AdminLayout')

@section('content')

<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <form action="{{ route('',)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h6 class="mb-4">Update Customer</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="namapelanggan" id="floatingInput"  placeholder="Nama Pelanggan" value="{{ }}">
                        <label for="floatingInput">Nama Pelanggan</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="floatingInputr" placeholder="Email" value="{{ }}">
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="telephone" id="floatingInput" placeholder="Telephone" value="{{ }}">
                        <label for="floatingInput">Stock</label>
                    </div>

                
                    <div class="mb-3">
                        <input class="form-control bg-dark" type="file" id="formFile" name="gambar" required="required">
                    </div>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Update</button>
                    <a class="btn btn-success mt-3" href="{{)}}">Kembali</a> 
                </form>
            </div>
        </div>
        </div>
    
</div>
@endsection