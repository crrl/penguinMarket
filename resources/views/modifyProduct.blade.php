@extends('parent')
  @section('contenido')
  <div class="row max-container">
          @if($dish != null)  
          @foreach($dish as $emp)
        <a href="modifyProductById/{{$emp->id}}">
        <div class="col-sm-3">
          <div class="card">
          <h3>platillo:</h3>
            {{$emp->nombre}}
            <h3>Precio:</h3>
            ${{$emp->precio}}
          </div>
        </div>
      </a>
        @endforeach
      {!! $dish->render() !!}
    @else
    <h1>No hay platillos actualmente</h1>
    @endif
  </div>
  @stop
