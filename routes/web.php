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



Route::get('home' , function(){

     return '<h1> Welcome To Home </h1>';

});



Route:: view('hh' , 'index');


// controller transporter  -----> التنقل عن طريق المتحكم 

Route::get('mod' , 'medocontroller@INDEX');


Route::get('mido/{id}' , 'MamdouhController@show');


Route::get('mam' , 'MamdouhController@index');

