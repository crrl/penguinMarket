@extends('parent')
@section('contenido')
<form action="{{url('aceptarModificacion/')}}/{{$product->id}}" method="POST" class="register-container">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    
  <div class="form-group">
    <input value="{{$id}}" type="hidden" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" value="{{$product->nombre}}" class="form-control" name="Nombre">
    @if($_POST)
        @if($_POST['Nombre'] == '')
          <div class="error">*Nombre inválido.*</div>
        @endif
      @endif
  </div>
  <div class="form-group">
    <label for="Edad">precio</label>
    <input type="number" value="{{$product->precio}}" class="form-control" name="Precio">
    @if($_POST)
        @if($_POST['Precio'] == '')
          <div class="error">*Precio inválido.*</div>
        @endif
      @endif
  </div>
  <input type="submit" class="btn btn-primary">
  <a href="{{url('/modifyProducts')}}" class="btn btn-danger">cancelar</a>
</form>
@stop