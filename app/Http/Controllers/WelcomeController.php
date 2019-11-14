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
        return view('/welcome', ['companies'=> Companies::all(), 'devices'=> Device::all(), 'vehicles'=>Vehicle::all(), 'drivers'=>Driver::all()]);
    }
}
