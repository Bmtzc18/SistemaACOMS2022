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
    return view('principal');
});

Route::get('/inicio', function () {
    return view('menu.inicio');  
});

Route::get('/login', function () {
    return view('auth.autentica');
});

Route::get('/registro', function () {
    return view('interfaces.registro');
});

Route::get('/inicioInv', function () {
    return view('Invitado.inicioInv');
});

Route::get('/informacion', function () {
    return view('Invitado.informacion');
});




