<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'idorder';

    protected $fillable = [
        'Idorder',
        'TotalUser',
        'BuktiPembayaran',
    ];
}
