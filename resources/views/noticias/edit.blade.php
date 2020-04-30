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
        <h3 class="text-center">Editar Noticia</h3>
        <form method="POST" action="{{ route('noticias.update', ['id'=> $noticia->id]) }}" >
                @csrf

                

                @method("PUT")

                

                <div class="form-group">
                    <label for="titulo"> Titulo </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo') ?: $noticia->titulo}}"/>


                </div>


                <div class="form-group">
                    <label for="contenido"> Contenido </label>
                    <textarea class="form-control" name="contenido" id="contenido" rows="3">{{old('contenido') ?: $noticia-> contenido}} </textarea>


                </div>



                <a class="btn btn-info "  href="{{ route('noticias')}}">Volver</a>
                

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

@endsection