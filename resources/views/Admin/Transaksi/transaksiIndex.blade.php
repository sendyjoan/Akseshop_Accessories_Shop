@extends('layouts.AdminLayout')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Daftar Transaksi</h6>
                        <a href="#">Cetak Report</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col">Action</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->idorder}}</td>
                                    <td>{{ $order->user_id->name}}</td>
                                    <td>{{ $order->user_id->telephone}}</td>
                                    <td>{{ $order->user_id->alamat}}</td>
                                    <td>{{ $order->totaluser}}</td>
                                    <td><img width="150px" src="{{asset('storage/'.$order->buktipembayaran)}}"></td>
                                    <td><a class="btn btn-sm btn-primary" href="{{ route('orders.show', $order->idorder)}}">Detail</a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

@endsection