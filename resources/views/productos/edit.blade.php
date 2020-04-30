@extends('layouts.app')


@section('content')

<div class="row p-5">

<div class="col-8 offset-2">


            @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>

                                    @foreach($errors->all() as $error)

                                    <li>
                                        {{$error}}
                                    </li>

                                    @endforeach

                            </ul>

                        </div>
                    @endif
        <h3 class="text-center">Editar Producto</h3>
        <form method="POST" action="{{ route('productos.update', ['id'=> $producto->id]) }}" >
                @csrf

                

                @method("PUT")

                

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control"  id="nombre" name="nombre" value="{{old('nombre') ?: $producto->nombre}}">                 
                </div>
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="number" class="form-control"  id="codigo" name="codigo" value="{{old('codigo') ?: $producto->codigo}}">                 
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control"  id="stock" name="stock" value="{{old('stock') ?: $producto->stock}}">                 
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control"  id="precio" name="precio" value="{{old('precio') ?: $producto->precio}}">                 
                </div>



                <a class="btn btn-info "  href="{{ route('productos')}}">Volver</a>

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

@endsection