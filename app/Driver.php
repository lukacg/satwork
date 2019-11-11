<?php

namespace App;
use App\Vehicle;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table= "drivers";

    protected $fillable = [
        'id', 'name', 'phone_number', 'vehicleId'
    ];

    public $sortable = ['name'];

    public function vehicle(){
        return $this->belogsTo('App\Vehicle', 'vehicleId');
    }
}
