<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorusuario;

Route::post('/validarlogin/{id?}', [Controladorusuario::class, 'validarlogin']) -> name("validarlogin");
Route::post('/editar_usuario/{id?}', [Controladorusuario::class, 'editar_usuario']) -> name("editarusuario");
Route::post('/crear_usuario/{id?}', [Controladorusuario::class, 'crear_usuario']) -> name("crear_usuario");


Route::get('/admin', [Controladorusuario::class, 'admin']);
Route::get('/agregarusuarios', [Controladorusuario::class, 'agregarusuarios']) -> name("agregarusuarios");
Route::get('/edit/{id?}', [Controladorusuario::class, 'edit']) -> name("edit");

Route::get(`/login`, [Controladorusuario::class, 'login']) -> name("login");

