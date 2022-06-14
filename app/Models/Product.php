<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idproduct';

    protected $fillable = [
        'Idproduct',
        'NamaProduct',
        'Deskripsi',
        'Stock',
        'Harga',
        'Gambar',
    ];

    public function category_id(){
        return $this->belongsTo(Category::class);
    }

    public function order_detail(){
        return $this->hasMany(Order_Detail::class);
    }
}
