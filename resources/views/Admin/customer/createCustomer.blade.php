@extends('layouts.AdminLayout')

@section('content')

<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
                <h6 class="mb-4">Create User</h6>
                <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="namapelanggan" placeholder="Nama Pelanggan">
                        <label for="floatingInput">Nama Pelanggan</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Email">
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Telephone" name="Telephone">
                        <label for="floatingInput">Telephone</label>
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