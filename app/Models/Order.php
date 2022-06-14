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

    public function user_id(){
        return $this->belongsTo(User::class);
    }

    public function order_detail(){
        return $this->hasMany(Order_Details::class);
    }
}
