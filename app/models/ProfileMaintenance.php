<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ProfileMaintenance extends Model
{
    protected $table = 'profile_maintenances';

    protected $fillable = [
        'cover',
        'photo',
        'sell_type_id',
        'type_category_id',
        'specialization_id',
        'work_hour',
        'holidays',
        'city_id',
        'district_id',
        'address',
        'phone',
        'facebook',
        'twitter',
        'instgram',
        'email',
        'password',
        'name',
        'description',
    ];
}
