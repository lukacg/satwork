<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use App\Vehicle;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $driver = Driver::with(['vehicle']);

        if ($request->has('vehicleId')) {
            $driver->where('vehicleId', $request->input('vehicleId'));
        }

        return view('/drivers.drivers', ['drivers' => $driver->get(), 'vehicles' => Vehicle::all()]);
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
        $data = $request->only(['name', 'phone_number', 'vehicleId']);

        if (count($data) > 0) {
            $driver = new Driver();

            $driver->name = $data['name'];
            $driver->phone_number = $data['phone_number'];
            $driver->vehicleId = $data['vehicleId'];

            $driver->save();
            return redirect('/drivers');

        }

        return view('/drivers.newDriver', ['vehicles' => Vehicle::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver = Driver::where('id', $id)->first();
        $vehicle = Vehicle::all();
        return view('/drivers.editDriver', compact('driver', 'vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'phone_number', 'vehicleId']);

        $driver = Driver::where('id', $id)->first;
        $driver->name = $data['name'];
        $driver->phone_number = $data['phone_number'];
        $driver->vehicleId = $data['vehicleId'];

        $vehicle->save();

        return redirect('/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $driver = Driver::where('id', $id)->first();
        $driver->delete();

        return redirect('/vehicles');
    }
}
