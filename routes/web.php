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
