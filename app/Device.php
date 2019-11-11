<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;
use App\Vehicle;

class Device extends Model
{
    protected $table = "devices";

    protected $fillable = [
        'id', 'type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId'
    ];

    public $sortable = ['type'];

    public function company(){
        return $this->belongsTo('App\Companies', 'companyId');
    }

    public function vehicles(){
        return $this->hasMany("App\Vehicle", 'vehicleId');
    }
}
