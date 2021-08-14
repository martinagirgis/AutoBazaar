<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SellType extends Model
{
    protected $table = 'sell_types';

    protected $fillable = [
        'Title_ar',
        'Title_en',
        'Title_ku',
        'type',
    ];

    public function category()
    {
        return $this->belongsTo('App\models\Category','type');
    }
}
