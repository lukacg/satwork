<?php

namespace App;
use App\Vehicle;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table= "drivers";

    protected $fillable = [
        'id', 'driver_name', 'phone_number', 'vehicleId'
    ];

    public $sortable = ['name'];

    public function vehicle(){
        return $this->belongsTo('App\Vehicle', 'vehicleId');
    }
}
