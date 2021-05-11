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

// Ruta por defecto
// Route::get('/', function () {
//     return view('welcome');
// });

// Funcion anonima o Closure
Route::get('/', function () {
    return 'Hola desde la pagina de inicio';
});

Route::get('contacto', function () {
    return 'Hola desde la pagina de contacto';
});

// Tipos de rutas
// Route::get();
// Route::post(); // from action='POST'
// Route::puth();
// Route::delete();

// Parametro obligatorio
Route::get('saludo/{nombre}', function ($nombre) {
    return 'Saludos ' . $nombre;
});

// Parametro opcional
Route::get('saludo/{nombre?}', function ($nombre = 'Invitado') {
    return 'Saludos ' . $nombre;
});
