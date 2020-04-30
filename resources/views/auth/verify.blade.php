@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu cuenta de EMAIL') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de validación ha sido enviado a tu correo electrónico') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, confirma tu dirección de correo electrónico.') }}
                    {{ __('Si no recibes un email') }}, <a href="{{ route('verification.resend') }}">{{ __('pulsa aquí para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
