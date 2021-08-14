<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';

    protected $fillable = [
        'Title_ar',
        'Title_en',
        'Title_ku',
        '',
    ];
}
