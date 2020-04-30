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



        <h3 class="text-center">Añadir Venta</h3>
        <form method="POST" action="{{route('ventas.store')}}">
                @csrf

                <div class="form-group">
                    <label for="clientes_id">Cliente</label>
                    <select id="clientes_id" class="form-control" name="clientes_id">
                    @forelse($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @empty
                        {{ __("NO HAY CLIENTE REGISTRADOS EN ESTE MOMENTO")}}
                    @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label for="productos_id">Producto</label>
                    <select id="productos_id" class="form-control" name="productos_id">
                    @forelse($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @empty
                        {{ __("NO HAY PRODUCTOS REGISTRADOS EN ESTE MOMENTO")}}
                    @endforelse
                    </select>
                </div>


                
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control"  id="cantidad" name="cantidad" value="{{old('cantidad') ?: $venta->cantidad}}">                 
                </div>
                <div class="form-group">
                    <label for="observaciones"> Observaciones </label>
                    <textarea class="form-control" name="observaciones" id="observaciones" rows="3">{{old('observaciones') ?: $venta-> observaciones}} </textarea>


                </div>

                
                
                

                <a class="btn btn-info "  href="{{ route('ventas')}}">Volver</a>
                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

@endsection
