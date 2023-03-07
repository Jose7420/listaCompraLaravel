@extends('layouts.master')

@section('content')

    <h1>Vista detalle producto {{$id}}</h1>
        <div class="row">

            <div class="col-sm-4">

                {{-- TODO: Imagen genérica de los productos --}}
                {{ $id ?? '' }}

            </div>
            <div class="col-sm-8">

                {{-- TODO: Datos del producto --}}

            </div>
        </div>
@stop
