<!DOCTYPE html>
<html>
    <head>
        <title>Struk Transaksi</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 14pt;
            }
        </style>
        <center>
            <h5>Nota Transaksi ID #{{$id}}</h5>
        </center>

        <p>{{ $orders[0]->created_at}}</p>

        <table class='table table-bordered' style="width:95%; margin:3px auto;">
            <thead>
                <tr>
                    <th>Nama Product</th>
                    <th>Harga</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->product_id->namaproduct}}</td>
                    <td>{{ $order->product_id->harga}}</td>
                    <td>{{ $order->qty}}</td>
                    <td>{{ $order->subtotal}}</td>
                    {{ $total += $order->subtotal}}
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3>{{ $total}}</h3>
        <center>
            Simpan Nota ini sebagai bukti anda telah berhasil melakukan Transaksi Pada AkseShop Secara Online #Admin Husein
        </center>
    </body>
</html>