<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'picture',
        'price',
        'reviews_id',
        'color',
        'tag',
        'categories',
        'sku',
        'sale',
        'seller',
        'information',
        'description',
    ];
}
