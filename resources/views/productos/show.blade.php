@extends('layouts.master')

@section('content')

    <h1>Vista detalle producto {{$id}}</h1>
        <div class="row">

            <div class="col-sm-4">

                {{-- TODO: Imagen genérica de los productos --}}
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

            </div>
            <div class="col-sm-8">

                {{-- TODO: Datos del producto --}}
                <h4>Nombre: {{$producto[0]}}</h4>
                <h4>Categoria: {{$producto[1]}}</h4>
                <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                    Pendiente de compra
                </button>

            </div>

        </div>
@stop
