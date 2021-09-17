@extends('plantilla')

@section('body')
    <div class="row" style="width:99%">
        <div class="col-10 offset-1" style="text-align: center;">
            <h1>Usuarios</h1>
        </div>
        <div class="col-10 offset-1">
            <table class="table table-striped">
                <thead>
                  <tr style="text-align: center;background-color:#007bff8f;color: white;">
                    <th scope="col">Usuario</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Editar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $item)
                        <tr style="text-align: center;">
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td><i class="fa fa-trash" val_id="{{$item->id}}" style="cursor:pointer"></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    

    <script type="text/javascript">
        //javascript
        $(document).ready(function(){
            
        })
    </script>
@endsection