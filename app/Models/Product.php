<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'features',
        'warranty_information',
        'price',
        'expected_delivery_date',
        'add_on_products',
        'image',
    ];

    protected $casts = [
        'add_on_products' => 'array',
        'price' => 'decimal:2',
    ];
}
