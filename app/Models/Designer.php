<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Designer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'designer';

    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'others_link',
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
