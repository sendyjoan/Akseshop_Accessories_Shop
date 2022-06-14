<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'idrole';

    protected $fillable = [
        'Idrole',
        'Role',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
