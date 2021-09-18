@extends('plantilla')

@section('body')
    <div class="row" style="width:99%">
        <div class="col-5 offset-3" style="text-align: center; margin-top: 10%;background-color:#007bff1c; border-radius: 10px; padding: 1% 4%;">
            <form action="{{ route('crearusuario')}}" method="POST">
                @csrf
                <h2 style="margin: 20px 0 20px 0; color:#0d6efd">Agregar Usuario</h2>
                <input type="text" name="name" class="form-control " placeholder="Nombre" style="margin: 20px 0 0 0;" value="{{old('name')}}">
                <input type="text" name="correo" class="form-control " placeholder="Correo" style="margin: 20px 0 0 0;" value="{{old('correo')}}">
                <input type="password" name="clave" class="form-control" placeholder="Clave" style="margin: 20px 0 0 0;" value="{{old('clave')}}">
                <select class="form-control" name="perfil" style="margin: 20px 0 0 0;">
                    <option selected diabled>Seleccione un perfil</option>
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                <button type="submit" class="btn btn-primary login" style="margin: 20px 0 20px 0; width: 100%;">Guardar</button>

                @error('correo')
                    <div style="position: relative;top: -8px;color: red;font-size: 80%;">El correo es obligatorio</div>
                @enderror
                @error('clave')
                    <div style="position: relative;top: -8px;color: red;font-size: 80%;">La contraseña es obligatoria</div>
                @enderror
                @error('perfil')
                    <div style="position: relative;top: -8px;color: red;font-size: 80%;">Debe selecionar un perfil</div>
                @enderror
            </form>
        </div>
        <div class="col-5 offset-3" style="text-align: center; color: #0d6efd">
            Demo
        </div>
    </div>
@endsection