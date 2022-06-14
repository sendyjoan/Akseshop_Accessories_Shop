@extends('layouts.AdminLayout')

@section('content')


<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Kategori Barang</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Gelang</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Kalung</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Cincin</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Kacamata</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01</td>
                                    <td>Jam Tangan</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Show</a>
                                    <a class="btn btn-sm btn-primary" href="">Update</a>
                                    <a class="btn btn-sm btn-primary" href="">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

@endsection


