<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Device;
use App\Vehicle;
use App\Driver;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $items = [];
        foreach (Companies::all() as $comp) $items[]['company']=$comp;
        foreach (Device::all() as $index => $dev){
            if($items[$index]) $items[$index]['device']=$dev;
            else $items[]['device']=$dev;
        }

        foreach (Vehicle::all() as $index => $veh){
            if($items[$index]) $items[$index]['vehicle']=$veh;
            else $items[]['vehicle']=$veh;
        }

        foreach (Driver::all() as $index => $dr){
            if($items[$index]) $items[$index]['driver']=$dr;
            else $items[]['driver']=$dr;
        }
        return view('/welcome', ['items'=>$items]);
    }
}
