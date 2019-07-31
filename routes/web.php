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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trial','trialController@trial');

Auth::routes();

//The route that is used to revert the users to the registration page.

Route::get('/sighnUp','patients\Main_Controller_For_Patients@index');

Route::post('/sighnUp','patients\Main_Controller_For_Patients@create');

Route::post('/storeData','patients\Main_Controller_For_Patients@store');
// {{ route('register') }}
// Route::get('/home', 'HomeController@index')->name('home');


