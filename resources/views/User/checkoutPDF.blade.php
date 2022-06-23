<!DOCTYPE html>
<html>
    <head>
        <title>Struk Transaksi</title>
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th{
                font-size: 9pt;
            }
        </style>
        <center>
            <h5>Nota Transaksi</h5>
        </center>

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
    </body>
</html>