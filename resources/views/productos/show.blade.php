@extends('layouts.master')

@section('content')

    <h1>Vista detalle producto {{$producto->id}}</h1>
        <div class="row">

            <div class="col-sm-4">

                {{-- TODO: Imagen genérica de los productos --}}
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

            </div>
            <div class="col-sm-8">

                {{-- TODO: Datos del producto --}}
                <h4>Nombre: {{$producto->nombre}}</h4>
                <h4>Categoria: {{$producto->categoria}}</h4>
                <h4>Precio: {{$producto->precio}}</h4>

                @if($producto->pendiente==false)
                    <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                    Comprar
                </button>
                @else
                    <h4>Comprado</h4>

                @endif


            </div>

        </div>
@stop
