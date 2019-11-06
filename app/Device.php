<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = "devices";

    protected $fillable = [
        'id', 'type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId'
    ];

}
