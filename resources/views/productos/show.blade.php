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
                    <button type="submit" class="btn btn-danger" style="padding:8px 50px;margin-top:25px;">
                    Comprar
                </button>
                @else
                    <h4>Comprado</h4>

                @endif
                <a type="button" class="btn btn-warning"  href="{{ url('/productos/edit/' . $producto->id ) }}" style="padding:8px 50px;margin-top:25px;">
                    Editar
                </a>
                <a type="button" class="btn btn-primary" href="{{url('/productos')}}" style="padding:8px 50px;margin-top:25px;">
                    Volver al listado
                </a>


            </div>

        </div>
@stop
