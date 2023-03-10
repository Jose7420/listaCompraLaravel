@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar Producto
                </div>
                <div class="card-body" style="padding:30px">
                     {{-- TODO: Abrir el formulario e indicar el método POST --}}

                    <form action="{{ url('/productos/edit/' . ($producto->id ?? '' )) }}" method="POST">

                        {{ method_field('put') }}
                        @csrf

                        {{-- TODO: Protección contra CSRF --}}


                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}" class="form-control">
                        </div>


                        <div class="form-group">
                            {{-- TODO: Completa el input para el año --}}
                            <label for="precio">Precio</label>
                            <input type="number" name="precio" id="precio" value="{{$producto->precio}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="textr" name="categoria" id="categoria" value="{{$producto->categoria}}" class="form-control">

                        </div>

                        <div class="form-group">

                            <label for="imagen">imagen</label>
                            <input type="text" name="imagen" id="imagen" value="{{$producto->imagen}}" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="synopsis">Descripción</label>
                            <textarea placeholder="{{$producto->descripcion}}" name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar producto
                            </button>
                        </div>

                        {{-- TODO: Cerrar formulario --}}
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop
