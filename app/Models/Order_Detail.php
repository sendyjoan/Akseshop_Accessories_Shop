<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = 'order_details';
    protected $primaryKey = 'idorderdetail';

    protected $fillable = [
        'Idorderdetail',
        'Qty',
        'Subtotal',
    ];
}
