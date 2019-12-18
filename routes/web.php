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
    return view('/');
});

Route::get('/', 'WelcomeController@index');
Route::get('/welcome/pagination', 'WelcomeController@fetch_data');

//Companies
Route::get('/companies', 'CompaniesController@index');
Route::get('/newCompany', 'CompaniesController@store')->middleware('auth');
Route::post('/newCompany', 'CompaniesController@store')->name('createcompany')->middleware('auth');
Route::get('/editCompany/{id}', 'CompaniesController@edit')->middleware('auth');
Route::post('/editCompany/{id}', 'CompaniesController@update')->name('updatecompany')->middleware('auth');
Route::get('/deleteCompany/{id}', 'CompaniesController@destroy')->middleware('auth');

//Device
Route::get('/devices', 'DeviceController@index');
Route::get('/newDevice', 'DeviceController@store')->middleware('auth');
Route::post('/newDevice', 'DeviceController@store')->name('createdevice')->middleware('auth');
Route::get('/editDevice/{id}', 'DeviceController@edit')->middleware('auth');
Route::post('/editDevice/{id}', 'DeviceController@update')->name('updatedevice')->middleware('auth');
Route::get('/deleteDevice/{id}', 'DeviceController@destroy')->middleware('auth');

//Device_new
Route::get('/device_new', 'DeviceNewController@index');
Route::get('/device/update/', 'DeviceNewController@update');

//Vehicles
Route::get('/vehicles', 'VehicleController@index');
Route::get('/newVehicle', 'VehicleController@store')->middleware('auth');
Route::post('/newVehicle', 'VehicleController@store')->name('createvehicle')->middleware('auth');
Route::get('/editVehicle/{id}', 'VehicleController@edit')->middleware('auth');
Route::post('/editVehicle/{id}', 'VehicleController@update')->name('updatevehicle')->middleware('auth');
Route::get('/deleteVehicle/{id}', 'VehicleController@destroy')->middleware('auth');

//Drivers
Route::get('/drivers', 'DriverController@index');
Route::get('/newDriver', 'DriverController@store')->middleware('auth');
Route::post('/newDriver', 'DriverController@store')->name('createdriver')->middleware('auth');
Route::get('/editDriver/{id}', 'DriverController@edit')->middleware('auth');
Route::post('/editDriver/{id}', 'DriverController@update')->name('updatedriver')->middleware('auth');
Route::get('/deleteDriver/{id}', 'DriverController@destroy')->middleware('auth');
Auth::routes();

//Login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
