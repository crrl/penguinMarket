@extends('parent')
@section('contenido')
<table class="table table-config">
  @if(!$orders)
    <h1>No hay productos para mostrar</h1>
  @else
  <th>Producto</th>
  <th>Cantidad</th>
  <th>Total a pagar</th>
  <th>Cliente</th>
  <th>Status</th>
  <th>Estado</th>
  <th>ver Cliente</th>
   @foreach($orders as $order)
   @if($order->status == 'en espera')
  <tr class="danger">
  @elseif($order->status == 'entregado')
  <tr class="success">
  @else
  <tr class="info">
  @endif
    <td>{{$order->producto_nombre}}</td>
    <td>{{$order->cantidad}}</td>
    <td>{{$order->total}}</td>
    <td>{{$order->cliente_nombre}}</td>
    <td>{{$order->status}}</td>
    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$order->id}}">
  cambiar estado
</button></td>
    <td><a class="btn glyphicon glyphicon-search" href="moreInfo/{{$order->cliente_id}}"></a></td>

<div class="modal fade" id="myModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Folio #{{$order->id}}</h4>
      </div>
      <div class="modal-body center">
        <h5>Info del producto:</h5> <hr>
        Producto: {{$order->producto_nombre}}, Cantidad: {{$order->cantidad}} <br>
        <hr>
        <h4 class="right">Total a pagar: {{$order->total}}</h4>
      </div>
      <div class="modal-footer">

        <a type="button" href="deleteFromCatalog/{{$order->id}}" class="btn btn-danger left">Eliminar del catálogo</a>
        <a type="button" href="onTheWay/{{$order->id}}" class="btn btn-success">En camino</a>
        <a type="button" href="orderSuccessful/{{$order->id}}" class="btn btn-success">Entregado</a>
        <a type="button" class="btn btn-default" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
  </tr>
  @endforeach
  @endif
</table>
@stop