@extends('parent')
  @section('contenido')
    <div class="row max-container">
      @if($tipo == 2)
        @if($dish != null)

        @foreach($dish as $emp)
          <a href="/penguinMarket/public/orderConfirm/{{$ide}}/{{$emp->id}}">
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
      @else
      <div class="row">
      <a href="/penguinMarket/public/welcome">
        <div class="col s12 no-access-card">
            <div class="no-access-img"></div>
        </div>
      </a>
      </div>
      @endif
  @stop
