<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorusuario;

//llamadas a vistas
Route::get('/', [Controladorusuario::class, 'login']) -> name("login");
Route::get('/admin', [Controladorusuario::class, 'admin']) -> name("admin");
Route::get('/agregarusuarios', [Controladorusuario::class, 'agregarusuarios']) -> name("agregarusuarios");
Route::get('/edit/{id?}', [Controladorusuario::class, 'edit']) -> name("edit");


//resuorces
Route::put('/editarusuario/{id?}', [Controladorusuario::class, 'editarusuario']) -> name("editarusuario");
Route::post('/crearusuario/{id?}', [Controladorusuario::class, 'crearusuario']) -> name("crearusuario");
Route::delete('/eliminarusuario/{id?}', [Controladorusuario::class, 'eliminarusuario']) -> name("eliminarusuario");
Route::post('/validarlogin', [Controladorusuario::class, 'validarlogin']) -> name("validarlogin");
