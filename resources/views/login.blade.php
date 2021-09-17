@extends('plantilla')

@section('body')
    <div class="row" style="width:99%">
        <div class="col-5 offset-3" style="text-align: center; margin-top: 10%;background-color:#007bff1c; border-radius: 10px; padding: 4%;">
            <h2 style="margin: 20px 0 20px 0; color:#0d6efd">Demo</h2>
            <input type="email" class="form-control correo" placeholder="Correo" style="margin: 20px 0 0 0;">
            <input type="password" class="form-control clave" placeholder="Clave" style="margin: 20px 0 0 0;">
            <button type="buttom" class="btn btn-primary login" style="margin: 20px 0 20px 0; width: 100%;">Guardar</button>
        </div>
        <div class="col-5 offset-3" style="text-align: center; color: #0d6efd">
            Usuario: Admin
            <br>
            Clave: Pass
        </div>
    </div>
    <script>
        "use strict"
        //se escucha el evento del login
        $('.login').click(function(){
            //se valida que el usuario y la contraseña sean correctas
            var correo = $('.correo').val()
            var clave = $('.clave').val()

            if( correo == '' || clave == '' ){
                alert("Debe diligenciar el correo y la clave")
            }else{
                var data = { correo:correo, clave:clave }
                console.log( 'asdassad' )
                $.ajax({url: `/validar_login/${data}`, success: function(result){
                    
                }});
            }
        })
    </script>
@endsection