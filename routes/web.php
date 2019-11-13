<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'WelcomeController@index');

//Companies
Route::get('/companies', 'CompaniesController@index');
Route::get('/newCompany', 'CompaniesController@store');
Route::post('/newCompany', 'CompaniesController@store')->name('createcompany');
Route::get('/editCompany/{id}', 'CompaniesController@edit');
Route::post('/editCompany/{id}', 'CompaniesController@update')->name('updatecompany');
Route::get('/deleteCompany/{id}', 'CompaniesController@destroy');

//Device
Route::get('/devices', 'DeviceController@index');
Route::get('/newDevice', 'DeviceController@store');
Route::post('/newDevice', 'DeviceController@store')->name('createdevice');
Route::get('/editDevice/{id}', 'DeviceController@edit');
Route::post('/editDevice/{id}', 'DeviceController@update')->name('updatedevice');
Route::get('/deleteDevice/{id}', 'DeviceController@destroy');

//Vehicles
Route::get('/vehicles', 'VehicleController@index');
Route::get('/newVehicle', 'VehicleController@store');
Route::post('/newVehicle', 'VehicleController@store')->name('createvehicle');
Route::get('/editVehicle/{id}', 'VehicleController@edit');
Route::post('/editVehicle/{id}', 'VehicleController@update')->name('updatevehicle');
Route::get('/deleteVehicle/{id}', 'VehicleController@destroy');

//Drivers
Route::get('/drivers', 'DriverController@index');
Route::get('/newDriver', 'DriverController@store');
Route::post('/newDriver', 'DriverController@store')->name('createdriver');
Route::get('/editDriver/{id}', 'DriverController@edit');
Route::post('/editDriver/{id}', 'DriverController@update')->name('updatedriver');
Route::get('/deleteDriver/{id}', 'DriverController@destroy');