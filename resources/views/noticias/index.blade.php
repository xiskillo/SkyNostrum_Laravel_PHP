@extends('layouts.app')


@section('content')

<div class="row p-5">
    <div class="col-12 mb-2">

    <a href="{{route ('noticias.create')}}" class="btn btn-primary float-right">Añadir Noticia</a>


    </div>
    @forelse ($noticias as $noticia)

       @include('noticias.partials.noticia')
            

       
    
     @empty
        
        <div class="w-100 p-3">

            <div class="alert alert-dark text-center"> NO HAY NOTICIAS </div>
        </div>
    @endforelse



    @if ($noticias->count())
        {{$noticias->links()}}
    @endif




</div>






@endsection