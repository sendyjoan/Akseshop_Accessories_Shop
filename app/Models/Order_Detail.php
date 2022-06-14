<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order_Detail extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'idorderdetail';

    protected $fillable = [
        'Idorderdetail',
        'Qty',
        'Subtotal',
    ];

    public function order_id(){
        return $this->belongsTo(Order::class);
    }

    public function product_id(){
        return $this->belongsTo(Product::class);
    }
}
