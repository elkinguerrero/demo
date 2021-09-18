<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Controladorusuario extends Controller
{
    function login(){
        session(['confirm' => '']);
        return view('login' );
    }

    function editarusuario(Request $request, $id=0){
        if($id==0){
            //Se crea el objeto usuario con los datos de los usuarios
            $usuarios = User::All();

            //Si todo es correcto se devuelve a la pagina usuarios
            return view('admin', compact('usuarios') );
        }

        //se inicializa el usuario con el id enviado
        $updateusuario = User::findOrFail($id);

        //Se comprueba que no este vacio el campo
        $request -> validate([
            'correo' => 'required',
            'clave' => 'required',
            'perfil' => 'required',
        ]);

        //se llenan las variables con los datos a actualizar
        $updateusuario -> name = $request -> name;
        $updateusuario -> email = $request -> correo;
        $updateusuario -> password = base64_encode( $request ->  clave );
        $updateusuario -> perfil = $request -> perfil;

        //Se guardan los datos
        $updateusuario -> save();
        
        //Se crea el objeto usuario con los datos de los usuarios
        $usuarios = User::All();

        //Si todo es correcto se devuelve a la pagina usuarios
        return view('admin', compact('usuarios') );
    }

    function eliminarusuario($id){
        //se inicializa el usuario con el id enviado
        $deleteusuario = User::findOrFail($id);
        $deleteusuario ->delete();

        //Se crea el objeto usuario con los datos de los usuarios
        $usuarios = User::All();
        return view('admin', compact('usuarios') );
    }
    
    function crearusuario(Request $request){
        //Se comprueba que no este vacio el campo
        $request -> validate([
            'correo' => 'required',
            'clave' => 'required',
            'perfil' => 'required',
        ]);

        //Se crea un objeto usuario
        $nuevousuario = new User;
        $nuevousuario -> name = $request -> name;
        $nuevousuario -> email = $request -> correo;
        $nuevousuario -> password = base64_encode( $request ->  clave );
        $nuevousuario -> perfil = $request -> perfil;
        $nuevousuario -> save();

        //Se crea el objeto usuario con los datos de los usuarios
        $usuarios = User::All();

        //Si todo es correcto se devuelve a la pagina usuarios
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

    function validarlogin(Request $request){
        //Se trae el usuario
        $usuario = DB::table('users')->where('email', $request ->correo )->where('password', base64_encode($request ->clave) )->first();

        //Se valida si existe el usuario
        if( $usuario == '' ){
            session(['confirm' => 'Usuario o contraseña incorrecta']);
            return view('login');
        }else if( $usuario -> perfil == "1" ){
            $usuarios = User::All();
            return view('admin', compact('usuarios') );
        }else if( $usuario -> perfil == "0" ){
            return  "No hay modulos creados para este perfil";
        }
    }
}
