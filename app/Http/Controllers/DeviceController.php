<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\Companies;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $device = Device::with(['company']);

        if ($request->has('companyId')) {
            $device->where('companyId', $request->input('companyId'));
        }

        return view('/devices/devices', ['devices' => $device->get(), 'companies' => Companies::all()]);


        //   return view('/devices.devices', ['devices' => Device::all()]);
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
        $data = $request->only(['type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId']);

        if (count($data) > 0) {
            $device = new Device();

            $device->type = $data['type'];
            $device->purchase_date = $data['purchase_date'];
            $device->activation_date = $data['activation_date'];
            $device->deactivation_date = $data['deactivation_date'];
            $device->companyId = $data['companyId'];

            $device->save();
            return redirect('/devices');
        }

        return view('/devices.newDevice', ['companies' => Companies::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::where('id', $id)->first();
        $company = Companies::all();
        return view('/devices.editDevice', compact('device', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['type', 'purchase_date', 'activation_date', 'deactivation_date', 'companyId']);

        $device = Device::where('id', $id)->first();
        $device->type = $data['type'];
        $device->purchase_date = $data['purchase_date'];
        $device->activation_date = $data['activation_date'];
        $device->deactivation_date = $data['deactivation_date'];
        $device->companyId = $data['companyId'];

        $device->save();

        return redirect('/devices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $device = Device::where('id', $id)->first();
        $device->delete();

        return redirect('/devices');
    }
}
