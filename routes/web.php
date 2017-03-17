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
    return view('pages.welcome');
    });



Route::get('/primero', function(){
    return view('pages.primero');
});


Route::get('/segundo', function(){
    return view('pages.segundo');
});

Route::get('/tercero', function(){
    return view('pages.tercero');
});


Route::get('/cuarto', function(){
    return view('pages.cuarto');
});

Route::post('/registrar', 'registrarController@store');


