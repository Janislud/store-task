<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'order_number',
        'email',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
