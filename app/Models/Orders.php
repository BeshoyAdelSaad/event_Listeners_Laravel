<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'product1', 
        'price_product1', 
        'product2', 
        'price_product2', 
        'product3', 
        'price_product3', 
        'product4', 
        'price_product4', 
        'product4', 
        'price_product4'
    ];
}