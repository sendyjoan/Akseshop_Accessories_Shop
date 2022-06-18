<?php

namespace App\Models;

use App\Models\Chart;
use App\Models\Category;
use App\Models\Add_Stock;
use App\Models\Order_Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function chart(){
        return $this->hasMany(Chart::class);
    }

    public function add_stock(){
        return $this->hasMany(Add_Stock::class);
    }
}
