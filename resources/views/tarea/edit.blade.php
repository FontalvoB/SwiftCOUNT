@extends('layouts.layouts')
@section('content')

<center>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Editar Tarea</div>

                <form action="{{ url('tarea/' . $tarea->id) }}" method="post" enctype="multipart/form">
                    @csrf
                    {{ method_field('PATCH') }}




                    <h5 class="card-title">Nombre de la Tarea</h5>
                    <input type="text" name="titulo" class="form-control" value="{{ $tarea->titulo }}" id="exampleFormControlInput1" placeholder="Nombre de la Tarea">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Descripción de la Tarea</h5>
                <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la tarea...">{{ $tarea->descripcion}}</textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Estado</h5>
                <select class="form-control" id="status" name="estado">
                    <option value="Pendiente" {{ $tarea->estado === 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="En Proceso" {{ $tarea->estado === 'En Proceso' ? 'selected' : '' }}>En Proceso</option>
                    <option value="Completado" {{ $tarea->estado === 'Completado' ? 'selected' : '' }}>Completada</option>
                </select>
            </div>
        </div>
        <br>
    </div>



    </div>
    </div>

    <div class="col-sm-12">
        <input type="submit" class="btn btn-primary me-md-2" value="Guardar Datos">
        <a href="{{ url('tarea') }}" class="btn btn-primary me-md-2">Volver</a>
    </div>
    </div>
    </form>

    </div>
    </div>
    </div>
    </div>




    <center>
        @endsection