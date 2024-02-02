@extends('layouts.layouts')
@section('content')

<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tarea</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Estado</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Task as $tarea)
        <tr>
          <td>{{ $tarea->id}}</td>
          <td>{{ $tarea->titulo}}</td>
          <td>{{ $tarea->descripcion}}</td>
          <td>{{ $tarea->estado}}</td>

          <td>
          <div class="d-inline-block bg-primary">
            <form method="" action="{{ url('/tarea/'.$tarea->id.'/edit')}}" >

             <input class="btn btn-primary btn-block" type="submit" onclick="return confirm('¿Quieres editar esta tarea?')" value="Editar">
            </form>
          </div>
          <div class="d-inline-block bg-primary">
            <form method="post" action="{{url('/tarea/'.$tarea->id)}}" >
            @csrf
                {{method_field('DELETE')}}
                <input class="btn btn-danger btn-block" type="submit" onclick="return confirm('¿Quieres eliminar esta tarea?')" value="Borrar">
            </form>
          </div>

          </td>


        </tr>
        @endforeach

      </tbody>
    </table>
    <a href="{{ url('tarea/create')}}" class="btn btn-success">Agregar tarea</a>

  </div>
</div>
@endsection