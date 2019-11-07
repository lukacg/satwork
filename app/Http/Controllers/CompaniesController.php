<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use App\Device;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return view('/companies.companies', ['companies' => Companies::all()]);
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
        $data = $request->only(['name', 'adress', 'contact_person', 'phone_number']);

        if (count($data) > 0) {
            $company = new Companies();
            $company->name = $data['name'];
            $company->adress = $data['adress'];
            $company->contact_person = $data['contact_person'];
            $company->phone_number = $data['phone_number'];

            $company->save();
            return redirect('/companies');
            }

        return view('/companies.newCompany');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $company = Companies::where('id', $id)->first();
        return view('/companies/editCompany', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = $request->only(['name', 'adress', 'contact_person', 'phone_number']);

        $company = Companies::where('id', $id)->first();
        $company->name = $data['name'];
        $company->adress = $data['adress'];
        $company->contact_person = $data['contact_person'];
        $company->phone_number = $data['phone_number'];

        $company->save();

        return redirect('/companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */

    public function destroy($id, Request $request)
    {
        $company = Companies::where('id', $id)->first();
        $company->delete();

        return redirect('/companies');
    }
}
