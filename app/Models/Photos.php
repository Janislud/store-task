<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_url',
        'product_id',
    ];

    public function photos(){
        return $this->belongsTo(Product::class);
    }
}
