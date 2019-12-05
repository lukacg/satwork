<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Device;

class Device_new extends Model
{
    protected $table = "device_news";

    protected $fillable = [
       'x', 'y', 'time', 'deviceId'
    ];

    public $sortable = ['deviceId'];

    public function device(){
        return $this->belongsTo('App\Device', 'deviceId');
    }
}
