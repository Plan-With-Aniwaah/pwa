<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'product_description',
        'product_image',
        'product_price',
        'product_category',
        'product_tags',
        'product_quantity',
        'product_video',
    ];
}
