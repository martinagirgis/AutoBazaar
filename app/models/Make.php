<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    protected $table = 'makes';

    protected $fillable = [
        'Title_ar',
        'Title_en',
        'Title_ku',
        '',
    ];
}
