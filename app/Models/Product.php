<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_code',
        'price',
        'unit',
        'quantity',
        'status',
        'models',
        'made_in',
        'category_id',
        'images',
        'content',
        'description',
    ];
}
