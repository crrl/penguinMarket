@extends('parent')
@section('contenido')
  @if($tipo == 1)
    <div class="row config">
      <a href="addProduct">
        <div class="col-sm-6 company-card add-img">
          <i class="glyphicon glyphicon-plus config-icon">Agregar Producto</i><br>          
        </div>
      </a>
      <a href="modifyProducts">
        <div class="col-sm-6 company-card add-img">
          <i class="glyphicon glyphicon-edit config-icon">Modificar Producto</i><br>          
        </div>
      </a>
    </div>
    <div class="row config">
     <a href="deleteProducts">
        <div class="col-sm-6 company-card add-img">
          <i class="glyphicon glyphicon-remove config-icon">Eliminar Producto</i><br>          
        </div>
      </a>
      <a href="showOrderList">
       <div class="col-sm-6 company-card add-img">
          <i class="glyphicon glyphicon-search config-icon">Mostrar Pedidos</i><br>          
        </div>
      </a>
    </div>
  @else
    <a href="/penguinMarket/public/welcome">
      <div class="col-sm-12 card">
          <h1>No tiene acceso a esta información.</h1>
      </div>
    </a>
  @endif
@stop