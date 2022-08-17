@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">Escala de preferencias vocacionales</h1>
            </div>
        </div>
        <div class="row">
            <div class="container login mt-4 margen">
                <form method="POST" action={{ url('crearPrueba') }}>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center p-3 text-light mb-4 mt-4">Ingresa tus datos</h2>
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
                                <span class="input-group-text" id="nombre">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                                aria-describedby="nombre" name="nombre" required value={{ old('nombre') }}>
                        </div>
                        <div class="input-group input-group-lg mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="apellido">
                                    <i class="bi bi-person-bounding-box"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="apellido"
                                aria-describedby="nombre" name="apellido" required value={{ old('apellido') }}>
                        </div>
                        <div class="input-group input-group-lg mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="genero">
                                    <i class="bi bi-gender-ambiguous"></i>
                                </span>
                            </div>

                            <select class="custom-select" id="inputGroupSelect01" name="genero" required>
                                <option value="">Seleccionar género</option>
                                <option value="Masculino" @if (old('genero') == 'Masculino') {{ 'selected' }} @endif>
                                    Masculino</option>
                                <option value="Femenino" @if (old('genero') == 'Femenino') {{ 'selected' }} @endif>
                                    Femenino</option>
                            </select>
                        </div>
                        <div class="input-group input-group-lg date mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="Fecha">
                                    <i class="bi bi-calendar"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha"
                                aria-describedby="Fecha" name="fecha" onkeypress="return false"
                                max="{{ Carbon\Carbon::now()->format('Y-m-d') }}" required value={{ old('fecha') }}>
                        </div>
                        <div class="input-group input-group-lg mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="correo">
                                    <i class="bi bi-envelope"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Correo"
                                aria-describedby="Correo" name="correo" required value={{ old('correo') }}>
                        </div>
                        <div class="input-group input-group-lg mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="telefono">
                                    <i class="bi bi-telephone"></i>
                                </span>
                            </div>
                            <input type="text" pattern="^[0-9]{4}[\-][0-9]{4}" title="0000-0000" class="form-control"
                                placeholder="Teléfono" aria-label="telefono" aria-describedby="telefono" name="telefono"
                                required value={{ old('telefono') }}>
                        </div>
                        <div class="input-group input-group-lg mb-4 col-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="lugar">
                                    <i class="bi bi-house-door-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Lugar de estudio" aria-label="lugar"
                                aria-describedby="lugar" name="lugar" required value={{ old('lugar') }}>
                        </div>
                        <div class="mb-4 col-8 justify-center d-flex align-items-center text-center row"> 
                            <a class="text-light" href="/continuar"><h4>¿Tienes una prueba que no finalizaste?<br><strong>¡ Continúala aquí !</strong></h4></a>
                            <a class="text-light col-4" href="/login"><h4>Iniciar sesión</h4></a>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <button type="submit"
                            class="btn col-2 col-lg-2 col-6 col-sm-6 text-light btn-lg btn-info boton ">
                            <h4>Registrarme</h4></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
