@extends('parent')
  @section('contenido')
  <form action="{{url('confirmOrder')}}/{{$dish->id_empresa}}" method="POST" class="register-container">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    
  <div class="form-group">
    <input value="{{$dish->id}}" type="hidden" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" value="{{$dish->nombre}}" class="form-control" name="Nombre" disabled>
  </div>
  <div class="form-group">
    <label for="Edad">precio</label>
    <input type="text" value="{{$dish->precio}}" class="form-control" name="Precio" disabled>
  </div>
  <div class="form-group">
    <label for="Cantidad">
      <input type="number" class="form-control" name="Cantidad" value="1">
    </label>
  </div>
  <input type="submit" class="btn btn-primary">
  <a href="{{url('/welcome')}}" class="btn btn-danger">cancelar</a>
</form>
  @stop