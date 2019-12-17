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
                    ->select('companies.company_name', 'devices.device_type', 'device_news.x', 'device_news.y', 'device_news.datetime', 'vehicles.license_plate', 'drivers.driver_name')
                    ->get();

                    return view('/welcome', compact('satwork', 'device', 'device_new'));

        $device = DB::table('devices')
                    ->leftJoin('device_news', 'devices.id', '=', 'device_news.deviceId')
                    ->select('devices.device_type', 'device_news.x', 'device_news.y', 'device_news.datetime')
                    ->get();

                    return view('/welcome', compact('satwork', 'device', 'deviceId'));

    }

    /*
    public function update($deviceId, Request $request)
    {
        $data = $request->only(['x', 'y', 'time']);

        $device = Device_new::where('deviceId', $deviceId)->first();
        $device->x = $data['x'];
        $device->y = $data['y'];
        $device->time = $data['time'];

        $device->save();

        return redirect('/welcome');
    }
    */
}
   