@extends('layouts.AdminLayout') 
@section('content') 


<div class="container  pt-4 px-4">
<div class="bg-secondary text-center rounded p-4">
<div class="d-fl align-items-center justify-content-center mb-4">
                        <h6 class="mb-0">Detail Customer</h6>
                    </div>

<div class="container">
                <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Telephone</th>
                                    <th>Gambar</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="" method="post">
                            @csrf
                                <tr>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->alamat}}</td>
                                    <td>{{ $user->telephone}}</td>
                                    <td>{{ $user->gambar}}</td>
                                    <td>{{ $user->created_at}}</td>
                                    <td>{{ $user->updated_at}}</td>
                                </tr>

                                </form>
                            </tbody>

                           
                        </table>
                        <a class="btn btn-success mt-3" href="{{ route('users.index')}}">Kembali</a> 
                </div>
                </div>
</div>

</div>
@endsection 