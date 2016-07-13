@extends('parent')
  @section('contenido')
  <div class="row max-container">
    <div class="col-sm-3 center-align">
      <div class="dropdown center center-align">
        <ul class="center-align no-style-list">
          <li><a href="#">Pizza</a></li>
          <li><a href="#">Hamburguesa</a></li>
          <li><a href="#">Sushi</a></li>
          <li><a href="#">Comida China</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="row">  
        <div class="col-sm-3 card">
          <h2>Producto #1</h2>
          Producto de prueba.
        </div>
        <div class="col-sm-3 card">
          Producto 2
        </div>
        <div class="col-sm-3 card">
          Producto 3
        </div>
        <div class="col-sm-3 card">
          Producto 4
        </div>
      </div>
    </div>
  </div>
  @stop
