@extends('layouts.app')


@section('content')
<div class="card">

         <div class="card-header">
             <a href="{{route('clientes.show', ['id'=> $cliente->id])}}"style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                 {{$cliente->nombre}}</a>
                                
        </div>
         <div class="card-body">
                                    
         <b>Nombre:</b> {{$cliente->nombre}}

        <br>

        <b> Apellidos:</b> {{$cliente->apellidos}}

        <br>

        <b> Dirección:</b> {{$cliente->direccion}}

        <br>

        <b> Ciudad:</b> {{$cliente->ciudad}}

        <br>

        <b> CP:</b> {{$cliente->cp}}
        </div>

                  
        <br>                  
        <a class="btn btn-info" style="width:75px" href="{{ route('clientes')}}">Volver</a>
  
</div>


  @endsection