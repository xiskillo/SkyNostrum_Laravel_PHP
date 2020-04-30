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

            <h2 class="text-center">Añadir Noticia </h2>



            <form method="POST" enctype="multipart/form-data" action="{{ route('noticias.store') }}">
                @csrf

                <div class="form-group">
                    <label for="titulo"> Titulo </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo') ?: $noticia->titulo}}"/>


                </div>


                <div class="form-group">
                    <label for="contenido"> Contenido </label>
                    <textarea class="form-control" name="contenido" id="contenido" rows="3">{{old('contenido') ?: $noticia-> contenido}} </textarea>


                </div>


                            <div class="form-group">
                            <label class="btn btn-warning" for="file">
                            <input id="file" name="file" type="file" style="display:none;">
                            {{ __("AÑADIR UNA IMAGEN") }}
                            </label>
                            </div>


                <a class="btn btn-info" href="{{route('noticias')}}"> Volver</a>
                <input type="submit" class="btn btn-primary" value="Aceptar"/>

            </form>

        </div>

    </div>




@endsection