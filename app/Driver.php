<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table= "drivers";

    protected $fillable = [
        'id', 'name', 'phone_number', 'vehicleId'
    ];

}
