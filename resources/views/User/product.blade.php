@extends('layouts.masterLayout')

@section('content')

 <!-- Start Gallery  -->
 <div class="products-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Product</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".bulbs">Men's corner</button>
                            <button data-filter=".fruits">HandCraft</button>
							<button data-filter=".podded-vegetables">Girls corner</button>
							<!-- <button data-filter=".root-and-tuberous">Root and tuberous</button> -->
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row special-list">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="{{asset('storage/'.$product->gambar)}}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{ route('barang.show', $product->idproduct)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <form action="{{ route('chart.store')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="idproduct" value="{{$product->idproduct}}">
                                    <a class="cart"><button type="submit" name="submit">Add To Chart</button></a>
                                </form>
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
    <!-- End Gallery  -->s
@endsection
