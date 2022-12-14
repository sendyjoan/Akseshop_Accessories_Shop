@extends('layouts.masterLayout')


@section('content')


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
                                <th>Terimkasih Telah Order Di AKSESHOP</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($charts as $chart)
                                <p hidden>{{$total += $chart->subtotal}}</p>
                            @endforeach
                        <td colspan="2">Total belanja : <h3>{{ $total}}</h3></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <form action="/checkout" method="post" enctype="multipart/form-data">
            @csrf
            <label class="form-label" for="customFile" >Upload Bukti Pembayaran</label>
            <input type="file" class="form-control" name="buktipembayaran" id="cbuktipembayaran" />
            <input type="hidden" name="total" value="{{$total}}">
            <br>
            <div class="col-12 d-flex shopping-box"> 
                <button type="submit" name="submit" class="ml-auto btn hvr-hover">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection

@endsection