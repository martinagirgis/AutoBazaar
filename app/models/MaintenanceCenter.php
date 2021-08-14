<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceCenter extends Model
{
    protected $table = 'maintenance_centers';

    protected $fillable = [
        'Title_ar',
        'Title_en',
        'Title_ku',
        '',
    ];
}
