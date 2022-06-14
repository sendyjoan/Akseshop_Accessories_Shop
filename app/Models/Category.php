<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'idkategori';

    protected $fillable = [
        'Idkategori',
        'NamaKategori',
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
