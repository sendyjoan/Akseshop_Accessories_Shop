@extends('layouts.masterLayout')
@section('content')

<div class="cart-box-main">
        <div class="container-fluid">
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
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($charts as $chart)
                                    <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{ asset('storage/'.$chart->product_id->gambar)}}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									{{$chart->product_id->namaproduct}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rp. {{ $chart->product_id->harga}}</p>
                                    </td>
                                    <td class="quantity-box">{{ $chart->quantity}}</td>
                                    <td class="total-pr">
                                        <p>Rp. {{ $chart->subtotal}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <form action="{{ route('chart.destroy', ['chart'=>$chart->idchart])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">Delete</button></td>
                                        </form>
                                        {{-- <a href="#">
									<i class="fas fa-times"></i>
								</a> --}}
                                    </td>
                                </tr>
                                <p hidden>{{$total += $chart->subtotal}}</p>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">{{ $total}}</div>
                        </div>

                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5">{{ $total}}</div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>

@endsection