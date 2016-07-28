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
      <label for="Correo">Correo</label>
      <input type="text" class="form-control" name="Correo">
      @if($_POST)
        @if($_POST['Correo'] == '')
          <div class="error">*Correo inválido.*</div>
        @endif
      @endif
    <div class="form-group">
      <label for="Colonia">Colonia</label>
      <input type="text" class="form-control" name="Colonia">
      @if($_POST)
        @if($_POST['Colonia'] == '')
          <div class="error">*Colonia inválida.*</div>
        @endif
      @endif
    </div>
    </div>
    <div class="form-group">
      <label for="Calle">Calle</label>
      <input type="text" class="form-control" name="Calle">
      @if($_POST)
        @if($_POST['Calle'] == '')
          <div class="error">*Calle inválido.*</div>
        @endif
      @endif
    </div>
    <div class="form-group">
      <label for="Numero">Numero exterior</label>
      <input type="text" class="form-control" name="Numero" maxlength="5">
      @if($_POST)
        @if($_POST['Numero'] == '')
          <div class="error">*Numero inválido.*</div>
        @endif
      @endif
    </div>
    <div class="form-group">
      <label for="Telefono">Telefono</label>
      <input type="number" class="form-control" name="Telefono" maxlength="10">
      @if($_POST)
        @if($_POST['Telefono'] == '')
          <div class="error">*Telefono inválido.*</div>
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