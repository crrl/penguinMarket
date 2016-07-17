@extends('parent')
  @section('contenido')
  <div class="row max-container">
    <div class="col-sm-3 center-align">
      <div class="dropdown center center-align">
        <ul class="center-align no-style-list">
          <a href="#"><li class="list-element">Pizza</li></a>
          <a href="#"><li class="list-element">Hamburguesa</li></a>
          <a href="#"><li class="list-element">Sushi</li></a>
          <a href="#"><li class="list-element">Comida China</li></a>
        </ul>
      </div>
    </div>
          @if($empresas != null)  
    <div class="col-sm-9">
      <div class="row center">
          @foreach($empresas as $emp)
        <a href="products/{{$emp->id}}">
        <div class="col-sm-3 card">
        <h3>empresa:</h3>
        {{$emp->nombre}} <br>
        <h3>giro:</h3>
        {{$emp->giro}} <br>
        </div>
      </a>
        @endforeach
      </div>
      {!! $empresas->render() !!}
    </div>
    @else
    <h1>No hay empresas actualmente</h1>
    @endif
  </div>
  @stop

