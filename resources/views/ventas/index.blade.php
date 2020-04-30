@extends('layouts.app')



@section('content')
<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{ __('Gestión de Ventas') }}</div>
                
                <a href="{{route ('ventas.create')}}" class="btn btn-primary float-right">Añadir Venta</a>
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    @forelse($ventas as $venta)
                        


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
                                <div class="card-footer">
                                    <div class="float-right">
                                            <a href="{{route('ventas.show', ['id'=> $venta->id])}}" class="btn btn-info">Detalles</a>
                                            <a href="{{route('ventas.edit', ['id'=> $venta->id])}}" class="btn btn-secondary">Editar</a>

                                            <form method="POST" class="float-right" action="{{route('ventas.destroy', ['id'=> $venta->id])}}">
                                                                                                        


                                                 {{ method_field('DELETE') }}
                                                 {{ csrf_field() }}
                                            
                                                                                                     
                                                <input type="submit" class="btn btn-danger" value="Borrar"/>
                                            
                                            
                                            
                                            </form>
                                            
                                           
                                    </div>
                                </div>
                        </div>

                        

                    @empty

                        <div class="alert alert-danger">
                            {{ __("SIN REGISTROS")}}
                        </div>


                    @endforelse

                    <a  href="{{ route('ventas.pdf') }}" class="btn btn-primary float-right"> Listado de Ventas en PDF </a>

                    @if($ventas-> count())

                        {{ $ventas->links()}}

                    @endif





                </div>
            </div>
        </div>
    </div>


@endsection