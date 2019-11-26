<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
use App\Device;
use App\Vehicle;
use App\Driver;
use DB;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $satwork = DB::table('companies')
                    ->leftJoin('devices', 'companies.id', '=', 'devices.companyId')
                    ->leftJoin('vehicles', 'devices.id', '=', 'vehicles.deviceId')
                    ->leftJoin('drivers', 'vehicles.id', '=', 'drivers.vehicleId')
                    ->select('companies.company_name', 'devices.device_type', 'vehicles.license_plate', 'drivers.driver_name')
                    ->get();

                    return view('/welcome', compact('satwork'));

    }


}
    /*

    public function index(Request $request)
    {
        $satwork = DB::table('drivers')
                    ->join('vehicles', 'vehicles.id', '=', 'drivers.vehicleId')
                    ->join('devices', 'devices.id', '=', 'vehicles.deviceId')
                    ->join('companies', 'companies.id', '=', 'devices.companyId')
                    ->select('companies.company_name', 'devices.device_type', 'vehicles.license_plate', 'drivers.driver_name')
                    ->paginate(10);
        return view('/welcome', compact('satwork'));

    }


    {
      
        $items = [];
        foreach (Companies::paginate(10) as $comp) $items[]['company']=$comp;
        foreach (Device::paginate(10) as $index => $dev){
            if($items[$index]) $items[$index]['device']=$dev;
            else $items[]['device']=$dev;
        }

        foreach (Vehicle::paginate(10) as $index => $veh){
            if($items[$index]) $items[$index]['vehicle']=$veh;
            else $items[]['vehicle']=$veh;   
        }

        foreach (Driver::paginate(10) as $index => $dr){
            if($items[$index]) $items[$index]['driver']=$dr;
            else $items[]['driver']=$dr;
        }

        

        return view('/welcome', ['items'=>$items]);
    }
    */


    /*
    public function items(Request $request)
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

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $itemCollection = collect($items);
        $perPage = 1;
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems = new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());

        return view('/welcome', ['items'=>$paginatedItems]);
    }

  */
