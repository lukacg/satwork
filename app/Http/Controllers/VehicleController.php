<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;
use App\Device;
use App\Companies;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $vehicle = Vehicle::with(['device']);

        if ($request->has('deviceId')) {
            $vehicle->where('deviceId', $request->input('deviceId'));
        }

        return view('/vehicles/vehicles', ['vehicles' => $vehicle->get(), 'devices' => Device::all()]);


        //   return view('/vehicles.vehicles', ['vehicles' => Vehicle::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['type', 'model', 'production_year', 'license_plate', 'deviceId']);

        if (count($data) > 0) {
            $vehicle = new Vehicle();

            $vehicle->type = $data['type'];
            $vehicle->model = $data['model'];
            $vehicle->production_year = $data['production_year'];
            $vehicle->license_plate = $data['license_plate'];
            $vehicle->deviceId = $data['deviceId'];

            $vehicle->save();
            return redirect('/vehicles');

        }

        return view('/vehicles.newVehicle', ['devices' => Device::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::where('id', $id)->first();
        $device = Device::all();
        return view('/vehicles.editVehicle', compact('vehicles', 'devices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['type', 'model', 'production_year', 'licence_plate', 'deviceId']);

        $vehicle = Vehicle::where('id', $id)->fist();
        $vehicle->type = $data['type'];
        $vehicle->model = $data['model'];
        $vehicle->production_year = $data['production_year'];
        $vehicle->license_plate = $data['license_plate'];
        $vehicle->deviceId = $data['deviceId'];

        $vehicle->save();

        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $vehicle = Vehicle::where('id'. $id)->first();
        $vehicle->delete();

        return redirect('/vehicles');
    }
}
