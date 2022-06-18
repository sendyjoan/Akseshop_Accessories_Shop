@extends('layouts.masterLayout')

@section('content')

 <!-- Start Shop Detail  -->
 <div class="shop-detail-box-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('storage/'.$product->gambar)}}" alt="First slide"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{ $product->namaproduct}}</h2>
                        <h5>Rp. {{ $product->harga}}</h5>
                        <p class="available-stock"><span> More than {{ $product->stock}} available</span><p>
						<h4>Short Description:</h4>
						<p>{{ $product->deskripsi}}</p>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#">Add to cart</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
@endsection