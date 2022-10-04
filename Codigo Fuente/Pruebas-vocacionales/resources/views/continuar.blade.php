@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">Continuar prueba</h1>
            </div>
        </div>
        <div class="row">
            <div class="container login mt-4 margen">
                <div class="container login mt-4 margen">
                    <form method="POST" action={{ url('continuarPrueba') }}>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center p-3 text-light mb-4 mt-4">Ingresa el correo electrónico que registraste en la prueba</h2>
                            </div>
                            @if ($errors->any())
                                <div class="container mt-2 mb-4">
                                    <div class="col-12">
                                        <div class="alert alert-danger">
                                            <h2 class="text-center"> El formulario contiene errores</h2>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        <h5>{{ $error }}</h5>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row justify-content-center">
                            <div class="input-group input-group-lg mb-4 col-8">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="correo">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                </div>
                                <input class="form-control" placeholder="Correo electrónico" aria-label="Correo"
                                    aria-describedby="Correo" name="correo" required value={{ old('correo') }}>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <button type="submit"
                                class="btn col-4 col-lg-4 col-6 col-sm-6 text-light btn-lg btn-info boton ">
                                <h4>Continuar prueba</h4></a>
                            </button> 
                        </div>  
                        <div class="row justify-content-center mt-4">
                            <a href={{ env('APP_URL') }}
                            class="btn col-4 col-lg-4 col-6 col-sm-6 text-light btn-lg btn-secondary boton-regresar">
                            <h4>Regresar</h4></a> 
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
