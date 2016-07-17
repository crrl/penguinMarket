@extends('parent')
@section('contenido')
<div class="row">
<div class="col-sm-12 center">
  <table class="table table-config">
    @if($user)
      <th>Nombre</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Colonia</th>
      <th>Calle</th>
      <th>Numero Ext</th>
    <tr>
      <td>{{$user->nombre}}</td>
      <td>{{$user->telefono}}</td>
      <td>{{$user->correo}}</td>
      <td>{{$user->colonia}}</td>
      <td>{{$user->calle}}</td>
      <td>{{$user->numero}}</td>
    </tr>
    @else
    <tr>
      <td>
        NO SE LOGRO ENCONTRAR AL USUARIO
      </td>
    </tr>
    @endif
  </table>
  <a href="/penguinMarket/public/showOrderList" class="btn btn-info">Regresar</a>
  </div>
</div>
@stop