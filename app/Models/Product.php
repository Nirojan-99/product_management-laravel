<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id'; 
    public $incrementing = true; 
    protected $keyType = 'int'; 

    protected $fillable = [
        'name', 'model_number', 'category', 'availability', 
        'product_details', 'how_to_use', 'shipping_details', 
        'images', 'pricing'
    ];

    protected $casts = [
        'images' => 'array',
        'pricing' => 'array',
        'availability' => 'boolean',
    ];
}
