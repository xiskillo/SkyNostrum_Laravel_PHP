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
        <h3 class="text-center">Editar Cliente</h3>
        <form method="POST" action="{{ route('clientes.update', ['id'=> $cliente->id]) }}" >
                @csrf

                

                @method("PUT")

                

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control"  id="nombre" name="nombre" value="{{old('nombre') ?: $cliente->nombre}}">                 
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control"  id="apellidos" name="apellidos" value="{{old('apellidos') ?: $cliente->apellidos}}">                 
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control"  id="direccion" name="direccion" value="{{old('direccion') ?: $cliente->direccion}}">                 
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control"  id="ciudad" name="ciudad" value="{{old('ciudad') ?: $cliente->ciudad}}">                 
                </div>
                <div class="form-group">
                    <label for="cp">CP</label>
                    <input type="number" class="form-control"  id="cp" name="cp" value="{{old('cp') ?: $cliente->cp}}">                 
                </div>



                <a class="btn btn-info "  href="{{ route('clientes')}}">Volver</a>

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

@endsection