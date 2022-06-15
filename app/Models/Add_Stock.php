<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_Stock extends Model
{
    protected $table = 'add_stock';
    protected $primaryKey = 'idaddstock';

    protected $fillable = [
        'Idaddstock',
        'Jumlah',
    ];

    public function user_id(){
        return $this->belongsTo(User::class);
    }

    public function product_id(){
        return $this->belongsTo(Product::class);
    }
}
