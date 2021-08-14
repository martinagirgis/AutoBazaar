<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'subcategory_id',
        'sell_type_id',
        'section_id',
        'type_category_id',
        'make_id',
        'model',
        'status_id',
        'year',
        'gearbox_id',
        'fuel_type_id',
        'distance',
        'work_hour',
        'color',
        'payment_method',
        'city_id',
        'district_id',
        'advandage_id',
        'interior_brush',
        'interior_color',
        'product_type',
        'user_id',
        'image'
    ];
}
