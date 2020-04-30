@extends('layouts.app')



@section('content')



<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{ __('Productos SkyNostrum') }}</div>
                
                <a href="{{route ('productos.create')}}" class="btn btn-primary float-right">Añadir Producto</a>
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    @forelse($productos as $producto)
                        


                        <div class="card">
                                <div class="card-header">
                                <a href="{{route('productos.show', ['id'=> $producto->id])}}" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                                {{$producto->nombre}}</a>
                                
                                </div>
                                <div class="card-body" >

                                @if($producto->attachment)

                                    <p style="text-align:center">

                                    <img src="{{ $producto->rutaFoto() }}" style="width:200px;height:200;border-radius: 20px" />
                                    </p>

                                    @endif

                                    <br>
                                    
                                    <b>Código:</b> {{$producto->codigo}}

                                <br>

                                <b> Stock:</b> {{$producto->stock}} Unidades.

                                <br>
                                <b> Precio:</b> {{$producto->precio}} Euros.

                                <br>

                               

                                </div>
                                       
                                       
                                    
                                        <div class="card-footer">
                                                <div class="float-right">

                                                
                                                        <a href="{{route('productos.show', ['id'=> $producto->id])}}" class="btn btn-info">Detalles</a>
                                                        <a href="{{route('productos.edit', ['id'=> $producto->id])}}" class="btn btn-secondary">Editar</a>
                                                            <form  method="POST" class="float-right" action="{{route('productos.destroy', ['id'=> $producto->id])}}">
                                                                                                        


                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}

                                                           
                                                            <input  type="submit" class="btn btn-danger" value="Borrar"/>
                                                           



                                                            </form>
                                                            
                                                </div>
                                        </div>
                                  </div>

                        

                    @empty

                        <div class="alert alert-danger">
                            {{ __("SIN PRODUCTOS")}}
                        </div>


                    @endforelse

                    @if($productos-> count())

                        {{ $productos->links()}}

                    @endif





                </div>
            </div>
        </div>
    </div>


@endsection