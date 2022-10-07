@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">Prueba finalizada </h1>
            </div>
        </div>
        <div class="row">
            <div class="container login mt-4 margen">
                <div class="container">
                    <div class="row justify-content-center">
                        @if ($errors->any())
                            <div class="col-12 mt-5">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>
                                                <h5>{{ $error }}</h5>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="col-10 col-lg-10 col-12 col-sm-12">
                            <div class="card mt-5 mb-5 ">
                                <div class="card-body body-card text-white">
                                    <h5 class="card-title text-center card-titulo">
                                        {{ $prueba->nombre }} {{ $prueba->apellido }}, verifica tu bandeja de entrada
                                        de tú correo electrónico. Te hemos enviado un correo para verificar
                                        tu identidad.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
