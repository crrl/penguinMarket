@extends('parent')
  @section('contenido')
    <form action="{{url('/saveProduct')}}/{{$id}}" method="POST" class="register-container">
      <input type="hidden" name="_token" value="{{csrf_token() }}">
      <div class="form-group ">
        <label for="nombre">Nombre del producto</label>
        <input type="text" class="form-control" name="Nombre">
      </div>
      <div class="form-group">
        <label for="Correo">precio</label>
        <input type="text" class="form-control" name="Precio">
      </div>
      <input type="submit" class="btn btn-primary" >
      <a href="{{url('welcome')}}" class="btn btn-danger">cancelar</a>
    </form>  
  @stop

