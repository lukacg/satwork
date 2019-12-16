<?php

namespace App\Http\Controllers;

use App\Device_new;
use Illuminate\Http\Request;
use App\Device;

class DeviceNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $device_new = Device_new::with(['device']);

        return Device_new::all()->toJson();

        
        // return view('/devices/devices_new', ['device_news' => $device_new->get(), 'devices' => Device::all()]);


        /*
        $device_new = Device_new::with(['device']);

        if ($request->has('deviceId')) {
            $device_new->where('deviceId', $request->input('deviceId'));
        }
        
        return view('/', ['device_news' => $device_new->get(), 'devices'=> Device::all()]);
        */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device_new  $device_new
     * @return \Illuminate\Http\Response
     */
    public function show(Device_new $device_new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device_new  $device_new
     * @return \Illuminate\Http\Response
     */
    public function edit(Device_new $device_new)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device_new  $device_new
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['x', 'y', 'time']);

        $device_new = Device_new::where('deviceId', $id)->first();
        $device_new->x = $data['x'];
        $device_new->y = $data['y'];
        $device_new->datetime = $data['datetime'];

        $device_new->save();

        /* $x='47', $y='16';

        $device_new = Device_new::where('deviceId', $id)->first();
        $device_new->x = $x;
        $device_new->y = $y;
        $device_new->datetime = $data['datetime']->now;
        */ 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device_new  $device_new
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device_new $device_new)
    {
        //
    }
}
