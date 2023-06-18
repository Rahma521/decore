<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'des',

    ];

    public function cartItems()
    {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderItems::class, 'product_id', 'id');
    }

}
