@extends('parent')
  @section('contenido')
    <form action="{{url('/addColonia')}}" method="POST" class="register-container">
      <input type="hidden" name="_token" value="{{csrf_token() }}">
      <div class="form-group ">
        <label for="nombre">Nueva colonia:</label>
        <input type="text" class="form-control" name="Colonia">
        @if($_POST)
        @if($_POST['Colonia'] == '')
          <div class="error">*Falta Colonia.*</div>
        @endif
      @endif
      </div>
      <div class="form-group ">
        <label for="Calle">Nueva calle:</label>
        <input type="text" class="form-control" name="Calle">
        @if($_POST)
        @if($_POST['Calle'] == '')
          <div class="error">*Falta Calle.*</div>
        @endif
      @endif
      </div>
      <div class="form-group ">
        <label for="Numero">Nuevo número:</label>
        <input type="number" class="form-control" name="Numero">
        @if($_POST)
        @if($_POST['Numero'] == '')
          <div class="error">*Falta número.*</div>
        @endif
      @endif
      </div>
      <input type="submit" class="btn btn-primary" >
      <a href="{{url('config')}}" class="btn btn-danger">cancelar</a>
    </form>  
  @stop

