<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'id', 'type', 'model', 'production_year', 'license_plate', 'deviceId'
    ];
}
