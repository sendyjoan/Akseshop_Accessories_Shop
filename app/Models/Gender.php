<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gender extends Model
{
    protected $table = 'genders';
    protected $primaryKey = 'idgender';

    protected $fillable = [
        'Idgender',
        'Gender',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
