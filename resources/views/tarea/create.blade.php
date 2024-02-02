@extends('layouts.layouts')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{ route('tarea.index') }}" ">
            @csrf
        <h5 class=" card-title">Nombre de la Tarea</h5>
            <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la Tarea">
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Descripción de la Tarea</h5>
          <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción de la tarea..."></textarea>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Estado</h5>
          <select class="form-select" aria-label="Default select example" name="estado">
            <option selected>Seleccione el Estado</option>
            <option value="Pendiente">Pendiente</option>
            <option value="En Proceso">En Proceso</option>
            <option value="Completado">Completado</option>
          </select>
        </div>
      </div>
      <br>
    </div>

    <button type="submit" class="btn btn-primary">Guardar Tarea</button>

  </div>
</div>

</form>
@endsection