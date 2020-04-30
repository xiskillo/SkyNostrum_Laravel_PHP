@extends('layouts.app')


@section('content')
<div class="card">

         <div class="card-header">
         <a href="{{route('ventas.show', ['id'=> $venta->id])}}" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;text-decoration:underline;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
          Identificador de Venta: {{$venta->id}}</a>
                                
        </div>
        
          <div class="card-body">
              
          <b>Identificador del Cliente:</b> {{$venta->clientes_id}} <br>
          <b>Nombre del Cliente:</b> {{$venta->clientes->nombre}} 

          <br> <br>
          <b>Identificador del Producto:</b> {{$venta->productos_id}}<br>

          <b>Nombre del Producto:</b> {{$venta->productos->nombre}} 

          <br><br>

          <b>Cantidad:</b> {{$venta->cantidad}} <br>

          <br>

          <b> Observaciones:</b>  <br> <p style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;
          font-style:italic;color:#6D7885;letter-spacing:1pt;word-spacing:2pt;font-size:17px;
          text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{$venta->observaciones}}   <p>                  
    
      </div>

                
      <br>                  
      <a class="btn btn-info" style="width:75px" href="{{ route('ventas')}}">Volver</a>
  
</div>


  @endsection