<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    public $timestamps = true;

    protected $fillable = [
        'product_detail_id',
        'product_detail_prod_id',
        'product_detail_cust_id',
        'product_detail_price_distributor',
        'product_detail_price_agentunggal',
        'product_detail_price_agenregular',
        'product_detail_price_reseller',
        'product_detail_price_end_user',
        'product_detail_volume',
        'product_detail_available'
    ];
}
