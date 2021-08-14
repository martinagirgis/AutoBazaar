<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
        'Title_ar',
        'Title_en',
        'Title_ku',
        'category_id',
    ];
}
