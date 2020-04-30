@extends('layouts.app')


@section('content')
<div class="card">

         <div class="card-header">
             <a href="/productos/{{$producto->id}}" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                 {{$producto->nombre}}</a>
                                
        </div>
         <div class="card-body">
                                    
        <b>Código:</b> {{$producto->codigo}}

          <br>

          <b>Stock:</b> {{$producto->stock}} Unidades.
        <br>
        <b>Precio:</b> {{$producto->precio}} Euros.

        <br>
        @if($producto->attachment)

        <p style="text-align:center">

        <img src="{{ $producto->rutaFoto() }}" style="width:300px;height:300;border-radius: 20px" />
        </p>

        @endif

         </div>

         <br>                  
        <a class="btn btn-info" style="width:75px" href="{{ route('productos')}}">Volver</a>
                               
  </div>

  @endsection