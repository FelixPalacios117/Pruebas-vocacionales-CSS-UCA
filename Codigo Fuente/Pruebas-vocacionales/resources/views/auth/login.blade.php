@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row">
            <div class="container login mt-4 margen">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center p-3 text-light mb-4 mt-4">Iniciar sesión</h2>
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
                                <input type="email" class="form-control" placeholder="Correo electrónico" aria-label="email"
                                    aria-describedby="email" name="email" required value={{ old('email') }}>
                            </div>
                            <div class="input-group input-group-lg mb-4 col-8">
                                <div class="input-group-prepend">
                                 <span class="input-group-text" id="password">
                                        <i class="bi bi-lock"></i>                                
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" aria-label="password"
                                aria-describedby="password" name="password" required value={{ old('password') }}>
                            </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <button type="submit"
                            class="btn col-2 col-lg-2 col-6 col-sm-6 text-light btn-lg btn-info boton ">
                            <h4>Iniciar sesión</h4></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
