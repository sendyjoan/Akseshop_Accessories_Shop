@extends('layouts.AdminLayout') 
@section('content') 


<div class="container  pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">  
        <div class="d-fl align-items-center justify-content-center mb-4">
            <h6 class="mb-0">Detail Transaksi</h6>
        </div>
            <div class="container">
                 <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th>Nama Product</th>
                                    <th>Harga Satuan</th>
                                    <th>Quantity</th>
                                    <th>Harga Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details as $detail)
                                <tr>
                                    <td>{{ $detail->product_id->namaproduct}}</td>
                                    <td>{{ $detail->product_id->harga}}</td>
                                    <td>{{ $detail->qty}}</td>
                                    <td>{{ $detail->subtotal}}</td>
                                </tr>
                                @endforeach
                            </tbody>   
                        </table>
                        <a class="btn btn-success mt-3" href="{{ route('orders.index')}}">Kembali</a> 
                </div>
        </div>
    </div>
</div>
@endsection 

