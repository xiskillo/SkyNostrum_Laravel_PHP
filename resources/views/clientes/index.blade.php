@extends('layouts.app')



@section('content')
<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{ __('Directorio de Clientes SkyNostrum') }}</div>
                
                <a href="{{route ('clientes.create')}}" class="btn btn-primary float-right">Añadir Cliente</a>
                
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    @forelse($clientes as $cliente)
                        


                        <div class="card">
                                <div class="card-header">
                                <a href="{{route('clientes.show', ['id'=> $cliente->id])}}" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;text-decoration:underline;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                                Identificador de Cliente: {{$cliente->id}}</a>
                                
                                </div>
                                <div class="card-body">
                                    
                             <b>   Nombre:</b> {{$cliente->nombre}}

                                <br>

                              <b>  Apellidos:</b> {{$cliente->apellidos}}

                                <br>

                                <b>   Dirección:</b> {{$cliente->direccion}}

                                <br>
                                <b>
                                Ciudad:</b> {{$cliente->ciudad}}

                                <br>

                                <b>  CP:</b> {{$cliente->cp}}

                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                             
                                            <a href="{{route('clientes.show', ['id'=> $cliente->id])}}" class="btn btn-info">Detalles</a>
                                            <a href="{{route('clientes.edit', ['id'=> $cliente->id])}}" class="btn btn-secondary">Editar</a>

                                            <form method="POST" class="float-right" action="{{route('clientes.destroy', ['id'=> $cliente->id])}}">
                                                                                                        


                                                 {{ method_field('DELETE') }}
                                                 {{ csrf_field() }}
                                            
                                                                                                     
                                                <input type="submit" class="btn btn-danger" value="Borrar"/>
                                            
                                            
                                            
                                            </form>
                                            
                                            
                                           
                                    </div>
                                    
                                </div>

                        </div>

                        

                    @empty

                        <div class="alert alert-danger">
                            {{ __("SIN PRODUCTOS")}}
                        </div>


                    @endforelse

                    <a  href="{{ route('clientes.pdf') }}" class="btn btn-primary float-right"> Listado de clientes en PDF </a>

                    @if($clientes-> count())

                        {{ $clientes->links()}}

                    @endif





                </div>
            </div>
        </div>
    </div>


@endsection