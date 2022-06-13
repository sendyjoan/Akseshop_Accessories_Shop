@extends('layouts.AdminLayout')

@section('content')

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Daftar Pelanggan</h6>
                        <a href="#">Cetak Report</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Pelanggan</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Detail Action</th>
                                    <th scope="col"> Delete Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Details</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                    
                                </tr>
                                <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Johasn</td>
                                    <td>0852345678</td>
                                    <td>Malang</td>
                                    <td>xxx@gmail.com</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                    <td><a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

@endsection