<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Showroom extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'showroom';
    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'location',
        'commertial_reg_no',
        'commertial_reg_img',
        'commertial_reg_exp',
        'password',
        'terms'
    ];

    protected $hidden = [
        'password',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
