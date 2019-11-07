<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companies;

class Device extends Model
{
    protected $table = "devices";

    protected $fillable = [
        'id', 'type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId'
    ];

    public function company(){
        return $this->belongsTo('App\Companies', 'companyId');
    }
}
