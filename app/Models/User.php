<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Order;
use App\Models\Gender;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id'; 

     protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Alamat',
        'Telephone',
        'Gambar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role_id(){
        return $this->belongsTo(Role::class);
    }

    public function gender_id(){
        return $this->belongsTo(Gender::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

    public function add_stock(){
        return $this->hasMany(Add_Stock::class);
    }
}