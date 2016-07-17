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
      @else
      <a href="/penguinMarket/public/welcome">
        <div class="col-sm-12 card">
            <h1>No tiene acceso a esta información.</h1>
        </div>
      </a>
      @endif

    </div>
  @stop
