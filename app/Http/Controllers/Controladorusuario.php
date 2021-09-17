<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Controladorusuario extends Controller
{
    function login(){
        return view('login' );
    }

    function validarlogin(Request $request){
        //Se trae el usuario
        return $request->all();
    }

    function editarusuario(Request $request){
        //Se trae el usuario
        return $request->all();
    }
    
    function crear_usuario(Request $request){
        //Se trae el usuario
        $nuevousuario = new User;
        $nuevousuario -> name = "'".$request -> correo."'";
        $nuevousuario -> password = "'".base64_encode( $request ->  clave )."'";
        $nuevousuario -> perfil = "'".$request -> perfil."'";
        $nuevousuario -> updated_at = "''";

        $nuevousuario -> save();

        $usuarios = User::All();
        return view('admin', compact('usuarios') );
    }

    function admin(){
        // return view('login' );
        $usuarios = User::All();
        return view('admin', compact('usuarios') );
    }
    
    function agregarusuarios(){
        return view('agregarusuarios' );
    }

    function edit($id){
        // return view('login' );
        $usuarios_id = User::findOrFail($id);
        return view('edit', compact('usuarios_id') );
    }
}
