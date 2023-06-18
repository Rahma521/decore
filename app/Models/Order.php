<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'user_phone',
        'order_no',
        'order_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }
}
