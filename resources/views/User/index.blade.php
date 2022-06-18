@extends('layouts.masterLayout')


@section('content')
 <!-- Start Slider -->
 <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AKSESHOP</strong></h1>
                            <p class="m-b-40">Aksesori merupakan kebutuhan pokok bagi anak muda zaman sekarang. Mulai dari laki-laki dan perempuan <br> Untuk itu, Kami menyediakan kebutuhan untuk memperindah style anda!!!</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AKSESHOP</strong></h1>
                            <p class="m-b-40">Tidak hanya Aksesori kekinian, namun juga ada aksesoris dari kerajinan tangan. <br>Produk dari kerajinan, kami buat sendiri (handmade) dari karyawan yang kami. Dapat dipastikan keasliannya.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span>
                            <h1 class="m-b-20"><strong>Welcome To <br> AKSESHOP</strong></h1>
                            </span>
                            
                            <p class="m-b-40">Make Your Outfit more one point with our product!!<br>Do not any further ado Let's Shopping!!</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <hr>
    <hr>

    <!-- Start mini closet  -->
    <div class="products-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-all text-center">
                        <h1>Mini Closed </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row special-list">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{asset('storage/'.$product->gambar)}}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{ route('barang.show', $product->idproduct)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $product->namaproduct}}</h4>
                            <h5> Rp. {{ $product->harga}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
   
@endsection
