<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
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
        'images',
        'description',
        'price',
        'title',
    ];

    public function category()
    {
        return $this->belongsTo('App\models\Category','category_id');
    }

    public function sellType()
    {
        return $this->belongsTo('App\models\SellType','sell_type_id');
    }

    public function section()
    {
        return $this->belongsTo('App\models\Section','section_id');
    }

    public function typeCategory()
    {
        return $this->belongsTo('App\models\TypeCategory','type_category_id');
    }

    public function make()
    {
        return $this->belongsTo('App\models\Make','make_id');
    }

    public function status()
    {
        return $this->belongsTo('App\models\Status','status_id');
    }

    public function gearbox()
    {
        return $this->belongsTo('App\models\Gearbox','gearbox_id');
    }

    public function fuelType()
    {
        return $this->belongsTo('App\models\FuelType','fuel_type_id');
    }

    public function district()
    {
        return $this->belongsTo('App\models\District','district_id');
    }

    public function city()
    {
        return $this->belongsTo('App\models\City','city_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
