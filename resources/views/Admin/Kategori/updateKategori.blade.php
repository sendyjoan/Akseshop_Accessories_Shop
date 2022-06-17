@extends('layouts.AdminLayout')

@section('content')

<div class="container pt-4 px-4">
<div class="row g-4">
        <div class="col-sm-12 col-xl-6 ">
            <div class="bg-secondary text-center  rounded p-4">
            <form action="" method="post"  enctype="multipart/form-data">
                 @csrf 
                @method('PUT')
                <h6 class="mb-4">Update Kategori Barang</h6>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="namakategori" placeholder="Nama kategori Barang">
                        <label for="floatingInput">Nama Kategori</label>
                    </div>

                    <button class="btn btn-success mt-3" type="submit" name="submit">Update</button>
                </form> 
                
            </div>
        </div>
        </div>
    
</div>
@endsection