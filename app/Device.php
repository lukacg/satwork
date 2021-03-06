<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;
use App\Vehicle;
use App\Device_new;

class Device extends Model
{
    protected $table = "devices";

    protected $fillable = [
        'id', 'device_type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId'
    ];

    public $sortable = ['type'];

    public function company(){
        return $this->belongsTo('App\Companies', 'companyId');
    }

    public function vehicles(){
        return $this->hasOne("App\Vehicle", 'vehicleId');
    }

    public function device_new(){
        return $this->hasOne("App\DeviceNew", 'deviceId');
    }
  
}
