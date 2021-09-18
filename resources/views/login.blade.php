@extends('plantilla')

@section('body')
    <div class="row" style="width:99%">
        <div class="col-5 offset-3" style="text-align: center; margin-top: 10%;background-color:#007bff1c; border-radius: 10px; padding: 4%;">
            <form action="{{ route('validarlogin')}}" method="POST">
                @csrf
                <h2 style="margin: 20px 0 20px 0; color:#0d6efd">Demo</h2>
                <input type="email" name="correo" class="form-control " placeholder="Correo" style="margin: 20px 0 0 0;">
                <input type="password" name="clave" class="form-control" placeholder="Clave" style="margin: 20px 0 0 0;">
                <button type="submit" class="btn btn-primary login" style="margin: 20px 0 20px 0; width: 100%;">Ingresar</button>
                @if ( Session::has('confirm') )
                    <div style="position: relative;top: -8px;color: red;font-size: 80%;">{{ session()->get('confirm') }}</div>
                @endif
            </form>
        </div>
        <div class="col-5 offset-3" style="text-align: center; color: #0d6efd">
            Usuario: admin@gmail.com
            <br>
            Clave: Pass
        </div>
    </div>
@endsection