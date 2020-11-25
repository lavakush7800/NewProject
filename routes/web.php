<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('registration','Crud\RegistrationController@index');
Route::post('save','Crud\RegistrationController@get');
Route::get('registration_show','Crud\RegistrationController@show');
Route::post('update','Crud\RegistrationController@edit');
// Route::post('registration_show','Crud\RegistrationController@update');
Route::Post('delete','Crud\RegistrationController@delete');



Route::get('registration_edit','Crud\RegistrationController@index');

