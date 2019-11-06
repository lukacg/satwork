<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = "companies";

    protected $fillable = [
        'id', 'name', 'adress', 'contact_person', 'phone_number'
    ];

}
