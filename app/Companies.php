<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Device;
use App\Vehicle;


class Companies extends Model
{
    protected $table = "companies";

    protected $fillable = [
        'id', 'name', 'adress', 'contact_person', 'phone_number'
    ];

    public $sortable = ['name'];

    public function devices(){
        return $this->hasMany("App\Device", 'deviceId');
    }
}
