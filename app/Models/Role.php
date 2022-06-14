<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
