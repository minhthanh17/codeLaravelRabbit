<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewConstructionShopDetail extends Model
{
    protected $table = 'new_construction_shop_details';

    protected $fillable = [
        'shop_id',
        'case_url',
        'reference_price_per_tsubo_minimum',
        'reference_price_per_tsubo_maximum',
        'reference_price_minimum',
        'reference_price_maximum',
        'price_average',
        'title',
        'publication_priority',
    ];
}
