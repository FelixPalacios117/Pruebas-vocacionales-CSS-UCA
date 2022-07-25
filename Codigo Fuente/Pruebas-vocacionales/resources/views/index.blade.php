@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="text-center">Escala de preferencias vocacionales</h1>
            </div>
        </div>
        <div class="row">
            <div class="container login mt-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center p-3 text-light mb-4 mt-4">Ingresa tus datos</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="input-group input-group-lg mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="nombre">
                                <i class="bi bi-person-fill"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                            aria-describedby="nombre" name="nombre">
                    </div>
                    <div class="input-group input-group-lg mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="apellido">
                                <i class="bi bi-person-bounding-box"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="apellido"
                            aria-describedby="nombre" name="apellido">
                    </div>
                    <div class="input-group input-group-lg mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="genero">
                                <i class="bi bi-gender-ambiguous"></i>
                            </span>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="genero">
                            <option selected>Seleccionar genero</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="input-group input-group-lg date mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="Fecha">
                                <i class="bi bi-calendar"></i>
                            </span>
                        </div>
                        <input type="date" class="form-control" placeholder="Fecha de nacimiento" aria-label="Fecha"
                            aria-describedby="Fecha" name="fecha">
                    </div>
                    <div class="input-group input-group-lg mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="correo">
                                <i class="bi bi-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Correo"
                            aria-describedby="Correo" name="correo">
                    </div>
                    <div class="input-group input-group-lg mb-4 col-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="telefono">
                                <i class="bi bi-telephone"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Telefono" aria-label="telefono"
                            aria-describedby="telefono" name="telefono">
                    </div> 
                </div>
                <div class="row justify-content-center mb-4">
                    <button type="button" class="btn col-2 col-lg-2 col-6 col-sm-6 text-light btn-lg btn-info text-xl "><h4>Registrarme</h4></button>
                </div>
            </div>
        </div>
    </div>
@endsection
