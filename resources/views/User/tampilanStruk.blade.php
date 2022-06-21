@extends('layouts.masterLayout')

@section('content')

<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($charts as $chart) --}}
                                <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                {{-- <img class="img-fluid" src="{{ asset('storage/'.$chart->product_id->gambar)}}" alt="" /> --}}
                            </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                {{-- {{$chart->product_id->namaproduct}} --}}
                                K
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp. </p>
                                </td>
                                <td class="quantity-box"></td>
                                <td class="total-pr">
                                    <p>Rp. </p>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <div class="col-12 d-flex shopping-box"><button href="#" class="ml-auto btn hvr-hover">Cetak</button> </div>
        </div>

    </div>
</div>

@endsection