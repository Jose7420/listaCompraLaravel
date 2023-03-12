@extends('layouts.master')

@section('content')

    <h1>Vista detalle producto {{ $producto->id }}</h1>
    <div class="row">

        <div class="col-sm-4">

            {{-- TODO: Imagen genérica de los productos --}}
            <img src="https://picsum.photos/200/300/?random" style="height:200px" />

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del producto --}}
            <h2><strong> {{$producto->nombre}} </strong> </h2>
            <h5><strong>Precio:</strong> {{ $producto->precio }}</h5>
            <h5><strong> Categoria: </strong>{{ $producto->categoria }}</h5>

            <h5><strong> Descripción:</strong> {{$producto->descripcion}}</h5>

            <form action="{{ url('/productos/comprar/' . $producto->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf

                @if ($producto->pendiente == false)
                    <h5><strong>Estado: </strong> Producto Actualmente no comprado</h5>
                    <input hidden="true" value="1" name="comprar" />
                    <button type="submmit" class="btn btn-danger" style="padding:8px 50px;margin-top:25px;">
                        Comprar
                    </button>


                @else
                    <h5><strong>Estado: </strong> Producto Actualmente Comprado</h5>
                @endif



                <a type="button" class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id) }}"
                    style="padding:8px 50px;margin-top:25px;">
                    Editar
                </a>
                {{-- <a type="button" class="btn btn-muted border border-primary text-primary" href="{{url('/productos')}}" style="padding:8px 50px;margin-top:25px;">
                    Volver al listado
                </a> --}}
                <a type="button" class="btn btn-primary" href="{{ url('/productos') }}"
                    style="padding:8px 50px;margin-top:25px;">
                    Volver al listado
                </a>

            </form>
        </div>

    </div>
@stop
