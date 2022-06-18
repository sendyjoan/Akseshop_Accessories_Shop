<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chart extends Model
{
    protected $table = 'chart';
    protected $primaryKey = 'idchart';

    protected $fillable = [
        'Idchart',
        'Quantity',
        'Subtotal',
        'Status',
    ];

    public function user_id(){
        return $this->belongsTo(User::class);
    }

    public function product_id(){
        return $this->belongsTo(Product::class);
    }
}
