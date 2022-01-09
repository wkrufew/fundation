<?php

use App\Http\Controllers\Admin\FormularioController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MiembrosController;


//Route::get('', [HomeController::class, 'index']);

Route::resource('empresas', HomeController::class)->only(['index','edit', 'update'])->names('empresas');

Route::resource('integrantes', MiembrosController::class)->names('integrantes');

Route::resource('mensajes', FormularioController::class)->only(['index', 'destroy'])->names('mensajes');