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

Route::get('/cambioD', function () {
    return view('auth.cambioD');
});




Route::get('/inicioInv', function () {
    return view('Invitado.inicioInv');
});

Route::get('/informacion', function () {
    return view('Invitado.informacion');
});

Route::get('/tablaAcoms', function () {
    return view('Invitado.tablaAcoms');
});
Route::get('/cambioCA', function () {
    return view('Invitado.cambioCA');
});




Route::get('/tAct', function () {
    return view('maestro.tAct');
});

Route::get('/listarA', function () {
    return view('maestro.listarA');
});

Route::get('/SolicitudesR', function () {
    return view('maestro.SolicitudesR');
});

Route::get('/AlumnosA', function () {
    return view('maestro.AlumnosA');
});

Route::get('/modificarAct', function () {
    return view('maestro.modificarAct');
});

Route::get('/prueba', function () {
    return view('maestro.prueba');
});

Route::get('/principalD', function () {
    return view('maestro.principalD');
});
Route::get('/registroAct', function () {
    return view('maestro.registroAct');
});





Route::get('/principalJ', function () {
    return view('JefeDepartamento.principalJ');
});




