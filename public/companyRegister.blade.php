@extends('parent')
@section('contenido')
  <form action="{{url('/guardarUsuario')}}" method="POST" class="register-container">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <div class="form-group ">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="Nombre">
      @if($_POST)
        @if($_POST['Nombre'] == '')
          <div class="error">*Nombre inválido.*</div>
        @endif
      @endif
    </div>
    <div class="form-group">
      <label for="Giro">Giro</label>
      <select class="form-control" name="Giro">
        <option value="Hamburguesas">Hamburguesas</option>
        <option value="Sushi">Sushi</option>
        <option value="ComidaChina">Comida China</option>
        <option value="Pizza">Pizza</option>
        <option value="Otros">Otros</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Correo">Correo</label>
      <input type="email" class="form-control" name="Correo">
      @if($_POST)
        @if($_POST['Correo'] == '')
          <div class="error">*Correo inválido.*</div>
        @endif
      @endif
    </div>
    <div class="form-group">
      <label for="Password">Contraseña</label>
      <input type="password" class="form-control" name="Password">
      @if($_POST)
        @if($_POST['Password'] == '')
          <div class="error">*Contraseña inválida.*</div>
        @endif
      @endif
    </div>
    <input type="submit" class="btn btn-primary" >
    <a href="{{url('welcome')}}" class="btn btn-danger">cancelar</a>
  </form>
@stop