<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device_new extends Model
{
    protected $table = "device_news";

    protected $fillable = [
        'x', 'y', 'time', 'deviceId'
    ];

    public $sortable = ['deviceId'];

    public function device_new(){
        return $this->belongsTo('App\Devices', 'deviceId');
    }
}
