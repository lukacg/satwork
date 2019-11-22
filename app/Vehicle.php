<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Device;

class Vehicle extends Model

{
    protected $table = 'vehicles';

    protected $fillable = [
        'id', 'type', 'model', 'production_year', 'license_plate', 'deviceId'
    ];

    public $sortable = ['name'];

    public function device(){
        return $this->belongsTo('App\Device', 'deviceId');
    }

    public function drivers(){
        return $this->hasOne("App\Driver", 'driverId');
    }
}
