<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity'
    ];

    public function photos(){
        return $this->hasMany(Photos::class);
    }

    public function cartItems(){
        return $this->hasMany(CartItem::class);
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
