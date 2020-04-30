@extends('layouts.app')


@section('content')
<div class="card">

         <div class="card-header">

         <p style="text-shadow:1px -3px 5px rgba(48,255,248,0.7);font-weight:normal;font-style:italic;color:#6E6EBA;
         letter-spacing:6pt;word-spacing:-1pt;font-size:32px;text-align:center;
         font-family:palatino linotype, palatino, serif;line-height:3;">{{$noticia->titulo}}</p>
         
                                
        </div>
         <div class="card-body">
                                    
         

        <br>
        <p style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;color:#3E3E69;border: 5px double #80748C;
        letter-spacing:3pt;word-spacing:-1pt;font-size:20px;text-align:center;font-family:palatino linotype, palatino, serif;
        line-height:2;margin:0px;padding:0px;">{{$noticia->contenido}}</p>


        <br>
       <h2> Autor de la noticia: </h2><br><p style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;color:#2F6982;
       letter-spacing:3pt;word-spacing:5pt;font-size:25px;text-align:center;
       font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;">{{$noticia->user->name}}</p>
        

        </div>
        @if($noticia->attachment)

                    <p style="text-align:center">

                    <img src="{{ $noticia->rutaFoto() }}" style="width:300px;height:300;border-radius: 20px" />
                    </p>

                    @endif

                  
        <br>                  
        <a class="btn btn-info" style="width:75px" href="{{ route('noticias')}}">Volver</a>
  
</div>


  @endsection