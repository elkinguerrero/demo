@extends('plantilla')

@section('body')
    <div class="row" style="width:99%">
        <div class="col-5 offset-3" style="text-align: center; margin-top: 10%;background-color:#007bff1c; border-radius: 10px; padding: 4%;">
            <form action="{{ route('crear_usuario')}}" method="POST">
                @csrf
                <h2 style="margin: 20px 0 20px 0; color:#0d6efd">Agregar Usuario</h2>
                <input type="text" name="correo" class="form-control " placeholder="Correo" style="margin: 20px 0 0 0;" value="">
                <input type="password" name="clave" class="form-control" placeholder="Clave" style="margin: 20px 0 0 0;" value="">
                <input type="text" name="perfil" class="form-control" placeholder="1 o 0" style="margin: 20px 0 0 0;" value="">
                <button type="submit" class="btn btn-primary login" style="margin: 20px 0 20px 0; width: 100%;">Guardar</button>
            </form>
        </div>
        <div class="col-5 offset-3" style="text-align: center; color: #0d6efd">
            Demo
        </div>
    </div>
@endsection