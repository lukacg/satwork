<?php

namespace App\Http\Controllers;

use App\Device_new;
use Illuminate\Http\Request;
use App\Device;
use Carbon\Carbon;

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
    public function update(Request $request)
    {
        $value =$request->id;
        
        //kod da se dobije broj zapisa u tabeli
        $broj=Device_new::get()->count();
        
       
        //while i < broj zapisa u tabeli $device_new = Device_new::where('deviceId',1)->update(['x' => $x, 'y' => $y, 'datetime' => $datetime]); prvi put za neparne drugi put za poarne itd
        if($value=)
        $i=1;
        else
        $i=2; 
        for ($i; $i<=$broj; $i+=2){
            $x = rand(44000000, 45000000) / 1000000;
            $y = rand(16000000, 17000000) / 1000000;
            $datetime = new Carbon('now','Europe/Belgrade');
    
    
            $device_new = Device_new::where('deviceId',$i)->update(['x' => $x, 'y' => $y, 'datetime' => $datetime]);
        }
        return $broj;
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
