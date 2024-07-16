<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'email', 
        'first_name', 
        'second_name', 
        'address', 
        'city', 
        'postal_code', 
        'country',
        'shipping_method', 
        'shipping_cost', 
        'total', 
        'card_number', 
        'holder_name', 
        'expiry_date', 
        'cvv'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
