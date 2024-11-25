<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vista1Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('vista1');
});

Route::get('/vista2', function () {
    return view('vista2');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/vista1', [Vista1Controller::class, 'index']);
//informacion/nc/carrrera

Route::get('/login/{usuario}/{contrasena}', function ($usuario, $contrasena) {

    $usuario = "pedro chavez";
    $contrasena = "123456";

    return view('login', ['usuario'=>$usuario, 'contrasena' => $contrasena] );
});

Route::get('/infromacion/{nc}/{carrera}', function ($nc, $carrera) {

    return view('informacion', ['nc'=>$nc, 'carrera' => $carrera] );
});

Route::get('/tacosdepastor', function () {
    return view('tacosdepastor');
});