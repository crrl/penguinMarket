@extends('parent')
@section('contenido')
  <form action="{{url('/logInCheck')}}" method="POST" class="register-container">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <div class="form-group ">
      <label for="nombre">Correo</label>
      <input type="text" class="form-control" name="Correo">
    </div>
    <div class="form-group">
      <label for="Correo">Contraseña</label>
      <input type="password" class="form-control" name="Password">
    </div>
    <input type="submit" class="btn btn-primary" >
    <a href="{{url('welcome')}}" class="btn btn-danger">cancelar</a>
  </form>
@stop