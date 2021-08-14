<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CarsRentalProduct extends Model
{
    protected $table = 'cars_rental_products';

    protected $fillable = [
        'sell_type_id',
        'section_id',
        'type_category_id',
        'make_id',
        'year',
        'rent_period',
        'city_id',
        'district_id',
        'price',
        'user_id',
        'image'
    ];
}
