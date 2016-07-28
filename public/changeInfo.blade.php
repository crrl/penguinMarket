@extends('parent')
@section('contenido')
<form action="{{url('modificarInfo')}}" method="POST" class="register-container">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    
  <div class="form-group">
    <input value="{{$id}}" type="hidden" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" value="{{$user->nombre}}" class="form-control" name="Nombre">
    @if($_POST)
        @if($_POST['Nombre'] == '')
          <div class="error">*Nombre inválido.*</div>
        @endif
      @endif
  </div>

  <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="number" value="{{$user->telefono}}" class="form-control" name="Telefono">
    @if($_POST)
        @if($_POST['Telefono'] == '')
          <div class="error">*Telefono inválido.*</div>
        @endif
      @endif
  </div>
  <div class="form-group">
    <label for="Calle">Calle</label>
    <input type="Text" value="{{$user->calle}}" class="form-control" name="Calle">
    @if($_POST)
        @if($_POST['Calle'] == '')
          <div class="error">*Calle inválida.*</div>
        @endif
      @endif
  </div>

  @foreach($colonia as $col)
    <div class="form-group">
    <label for="Calle">Direccion Extra</label>
    <input type="Text" value="{{$col->colonia}}" class="form-control" disabled>
    @if($_POST)
        @if($_POST['Colonia'] == '')
          <div class="error">*Calle inválida.*</div>
        @endif
      @endif
  </div>
  @endforeach

  <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" value="{{$user->correo}}" class="form-control" name="Correo">
    @if($_POST)
        @if($_POST['Correo'] == '')
          <div class="error">*Correo inválido.*</div>
        @endif
      @endif
  </div>

  <div class="form-group">
    <label for="Colonia">Colonia</label>
    <input type="text" value="{{$user->colonia}}" class="form-control" name="Colonia">
    @if($_POST)
        @if($_POST['Colonia'] == '')
          <div class="error">*Colonia inválida.*</div>
        @endif
      @endif
  </div>
  <div class="form-group">
    <label for="Numero">Numero</label>
    <input type="number" value="{{$user->numero}}" class="form-control" name="Numero">
    @if($_POST)
        @if($_POST['Numero'] == '')
          <div class="error">*Numero inválida.*</div>
        @endif
      @endif
  </div>
  <div class="form-group">
    <input type="hidden" value="{{$user->contrasena}}" class="form-control" name="Password">
  </div>
  <input type="submit" class="btn btn-primary">
  <a href="{{url('/config')}}" class="btn btn-danger">cancelar</a>
</form>
@stop