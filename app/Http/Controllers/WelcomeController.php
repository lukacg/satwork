<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Vehicle;
use App\Driver;
use App\Device_new;
use App\Device;

use DB;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $satwork = DB::table('companies')
                    ->leftJoin('devices', 'companies.id', '=', 'devices.companyId')
                    ->leftJoin('vehicles', 'devices.id', '=', 'vehicles.deviceId')
                    ->leftJoin('drivers', 'vehicles.id', '=', 'drivers.vehicleId')
                    ->leftJoin('device_news', 'devices.id', '=', 'device_news.deviceId')
                    ->select('companies.company_name', 'devices.device_type', 'vehicles.license_plate', 'drivers.driver_name')
                    ->get();

        $device = DB::table('devices')
                    ->leftJoin('device_news', 'devices.id', '=', 'device_news.deviceId')
                    ->select('devices.device_type', 'device_news.x', 'device_news.y', 'device_news.time')
                    ->get();

                    return view('/welcome', compact('satwork', 'device'));

    }

    
}
   