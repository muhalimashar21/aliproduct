<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;
    

    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'product_image',
        'product_point'
    ];
}
