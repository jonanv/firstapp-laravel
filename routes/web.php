<?php

use App\Http\Controllers\PortfolioController;
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
// Route::get('/', function() {
//     return 'Hola desde la pagina de inicio';
// });

// Route::get('contacto', function() {
//     return 'Hola desde la pagina de contacto';
// });

// Tipos de rutas
// Route::get();
// Route::post(); // from action='POST'
// Route::puth();
// Route::delete();

// // Parametro obligatorio
// Route::get('saludo/{nombre}', function($nombre) {
//     return 'Saludos ' . $nombre;
// });

// // Parametro opcional
// Route::get('saludo/{nombre?}', function($nombre = 'Invitado') {
//     return 'Saludos ' . $nombre;
// });


// // Rutas con nombre
// Route::get('contactame', function() {
//     return 'Sección de contactos';
// })->name('contactos');

// Route::get('/', function() {
//     echo '<a href="' . route('contactos') . '">Contactos 1</a><br>';
//     echo '<a href="' . route('contactos') . '">Contactos 2</a><br>';
//     echo '<a href="' . route('contactos') . '">Contactos 3</a><br>';
//     echo '<a href="' . route('contactos') . '">Contactos 4</a><br>';
// });


// // Como mostrar HTML con las vistas y pasar datos a la vistas
// Route::get('/', function() {
//     $nombre = 'Giovanni';
//     // return view('home')->with('nombre', $nombre);
//     // return view('home')->with(['nombre' => $nombre]);
//     // return view('home', ['nombre' => $nombre]);
//     return view('home', compact('nombre')); // Debe de tener el mismo nombre de la variable
// })->name('home');

// $nombre = 'Giovanni';
// Route::view('/', 'home')->name('home'); // Politicas de privacidad, terminos y condiciones
// Route::view('/', 'home', ['nombre' => 'Giovanni'])->name('home');
// Route::view('/', 'home', ['nombre' => $nombre])->name('home');


// // Estructuras de control con Blade
// $portfolio = [
//     ['title' => 'Proyecto #1'],
//     ['title' => 'Proyecto #2'],
//     ['title' => 'Proyecto #3'],
//     ['title' => 'Proyecto #4'],
// ];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio'); // Controlador por defecto y pasa la variable portafolio (que es el array) => Illuminate\Routing\ViewController
                                                                                // Controlador vario por defecto => php artisan make:controller PortfolioController

// Route::get('/portfolio', PortfolioController::class)->name('portfolio');     // Controlador con el metodo __invoke => php artisan make:controller PortfolioController -i

// Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');  // Controlador con los 7 metodos REST => php artisan make:controller PortfolioController -r
Route::resource('portfolio', PortfolioController::class); // Asi aparecen todos los metodos del controlador => php artisan make:controller PortfolioController -r
// Route::resource('portfolio', PortfolioController::class)->only(['index', 'show']); // Asi aparecen solo los metodos index y show del controlador => php artisan make:controller PortfolioController -r
// Route::resource('portfolio', PortfolioController::class)->except(['index', 'show']); // Asi aparecen todos los metodos excepto index y show del controlador => php artisan make:controller PortfolioController -r

// Route::apiResource('/portfolio', PortfolioController::class);     // Controlador api con solo 5 metodos del controladore resource (no tiene los metodos create y edit) => php artisan make:controller PortfolioController --api
// Route::apiResource('/portfolio', PortfolioController::class)->only(['index', 'show']);     // Controlador api con solo 5 metodos del controladore resource (no tiene los metodos create y edit) => php artisan make:controller PortfolioController --api
// Route::apiResource('/portfolio', PortfolioController::class)->except(['index', 'show']);     // Controlador api con solo 5 metodos del controladore resource (no tiene los metodos create y edit) => php artisan make:controller PortfolioController --api
