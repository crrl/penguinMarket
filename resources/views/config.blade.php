@extends('parent')
@section('contenido')
  @if($tipo == 1)
    <div class="row config">
      <a href="addProduct">
        <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-plus config-icon">Agregar Producto</i><br>          
        </div>
      </a>
      <a href="modifyProducts">
        <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-edit config-icon">Modificar Producto</i><br>          
        </div>
      </a>
    </div>
    <div class="row config">
     <a href="deleteProducts">
        <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-remove config-icon">Eliminar Producto</i><br>          
        </div>
      </a>
      <a href="showOrderList">
       <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-search config-icon">Mostrar Pedidos</i><br>          
        </div>
      </a>
    </div>
  @else
    <div class="row config">
      <a href="http://162.243.167.78/changeUserInfo">
        <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-edit config-icon">Cambiar información</i><br>          
        </div>
      </a>
      <a href="http://162.243.167.78/addUserInfo">
        <div class="col-sm-6 company-card">
          <i class="glyphicon glyphicon-plus config-icon">agregar dirección</i><br>          
        </div>
      </a>
    </div>
  @endif
@stop