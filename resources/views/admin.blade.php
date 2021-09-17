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
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $item)
                        <tr style="text-align: center;">
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td><a href="{{route('edit')}}/{{$item->id}}"><i class="fa fa-edit" style="cursor:pointer"></i></td>
                            <td><a href="{{route('edit',$item)}}"><i class="fa fa-trash" style="cursor:pointer"></td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <form action="{{ route('agregarusuarios')}}" method="GET" style="text-align: end;">
                <button type="submit" class="btn btn-primary login" style="margin: 20px 0 20px 0;">Agregar</button>
              </form>
            </form>
        </div>
    </div>
    

    <script type="text/javascript">
        //javascript
        $(document).ready(function(){
            
        })
    </script>
@endsection