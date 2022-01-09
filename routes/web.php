<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class)->name('home');

//rutas para la app y su funcionamiento
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache de la app eliminada';
});

 // borrar caché de ruta
 Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Cache de rutas eliminada';
});

// borrar caché de configuración
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Configuracion de cache eliminada';
}); 

// borrar caché de vista
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'Cache de vistas eliminada';
});

// optimmizar cache
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return 'Cache de vistas eliminada';
});

Route::get('storage-link', function () {
    $exitCode = Artisan::call('storage:link');
    return 'Simbolic Link establecido';
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
