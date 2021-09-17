<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Controlador_usuario extends Controller
{
    function login(){
        $usuarios = User::All();
        return view('login', compact('usuarios') );
    }

    function validarlogin($datos='0'){
        // $usuarios = User::All();
        return 'validarlogin'.$datos;
    }
}
