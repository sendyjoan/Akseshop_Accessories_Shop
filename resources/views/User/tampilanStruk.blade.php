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
                            @foreach ($orders as $order)
                                <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                <img class="img-fluid" src="{{ asset('storage/'.$order->product_id->gambar)}}" alt="" />
                            </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                {{$order->product_id->namaproduct}}
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>Rp. {{$order->product_id->harga}}</p>
                                </td>
                                <td class="total-pr">
                                    <p>{{ $order->qty}}</p>
                                </td>
                                <td class="price-pr">
                                    <p>Rp. {{$order->subtotal}}</p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

            <div class="col-12 d-flex shopping-box"><a href="{{ route('cetak', $ido)}}" class="ml-auto btn hvr-hover" name="submit">Cetak</a> </div>
        </div>

    </div>
</div>

@endsection