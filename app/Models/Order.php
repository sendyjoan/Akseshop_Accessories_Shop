<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order_Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->hasMany(Order_Detail::class);
    }
}
