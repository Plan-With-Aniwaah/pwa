<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_description',
        'product_images',
        'product_price',
        'product_category',
        'product_tags',
        'product_quantity',
        'product_videos',
    ];

    protected $casts = [
        'product_images' => 'array',
        'product_videos' => 'array',
    ];
}
