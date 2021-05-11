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

// // Que son y como se utilizan las rutas
// Ruta por defecto
// Route::get('/', function() {
//     return view('welcome');
// });

// Funcion anonima o Closure
Route::get('/', function() {
    return 'Hola desde la pagina de inicio';
});

// Route::get('contacto', function() {
//     return 'Hola desde la pagina de contacto';
// });

// Tipos de rutas
// Route::get();
// Route::post(); // from action='POST'
// Route::puth();
// Route::delete();

// Parametro obligatorio
Route::get('saludo/{nombre}', function($nombre) {
    return 'Saludos ' . $nombre;
});

// Parametro opcional
Route::get('saludo/{nombre?}', function($nombre = 'Invitado') {
    return 'Saludos ' . $nombre;
});


// // Rutas con nombre
Route::get('contactame', function() {
    return 'Sección de contactos';
})->name('contactos');

Route::get('/', function() {
    echo '<a href="' . route('contactos') . '">Contactos 1</a><br>';
    echo '<a href="' . route('contactos') . '">Contactos 2</a><br>';
    echo '<a href="' . route('contactos') . '">Contactos 3</a><br>';
    echo '<a href="' . route('contactos') . '">Contactos 4</a><br>';
});
