@extends('parent')
@section('contenido')
  <form action="{{url('/guardarUsuario')}}" method="POST" class="register-container">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <div class="form-group ">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="Nombre">
    </div>
    <div class="form-group">
      <label for="Correo">Correo</label>
      <input type="text" class="form-control" name="Correo">
    <div class="form-group">
      <label for="Colonia">Colonia</label>
      <input type="text" class="form-control" name="Colonia">
    </div>
    </div>
    <div class="form-group">
      <label for="Calle">Calle</label>
      <input type="text" class="form-control" name="Calle">
    </div>
    <div class="form-group">
      <label for="Numero">Numero exterior</label>
      <input type="text" class="form-control" name="Numero">
    </div>
    <div class="form-group">
      <label for="Telefono">Telefono</label>
      <input type="text" class="form-control" name="Telefono">
    </div>
    <div class="form-group">
      <label for="Password">Contraseña</label>
      <input type="password" class="form-control" name="Password">
    </div>
    <input type="submit" class="btn btn-primary" >
    <a href="{{url('welcome')}}" class="btn btn-danger">cancelar</a>
  </form>
@stop