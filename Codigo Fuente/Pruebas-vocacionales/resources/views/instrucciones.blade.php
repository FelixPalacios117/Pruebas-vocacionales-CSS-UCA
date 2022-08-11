@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">Instrucciones generales</h1>
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
                                <h5 class="card-header text-center header-card card-titulo">Indicaciones</h5>
                                <div class="card-body body-card text-white">
                                    <h5 class="card-title text-center card-titulo">Kuder escala de preferencias</h5>
                                    <p class="card-text card-texto">
                                        Este formulario tiene por objeto ayudarle a descubrir sus preferencias vocacionales.
                                        No se
                                        trata de un examen: aquí no hay respuestas exactas o inexactas. Toda respuesta que
                                        refleje
                                        fielmente su modo de pensar es una buena respuesta.
                                    </p>
                                    <p class="card-text card-texto">
                                        A continuación encontrará doce páginas, en cada una de ellas hay una serie de
                                        actividades
                                        reunidas en grupo de tres. Lea primero las tres actividades que forman cada grupo.
                                        Luego decida
                                        cual de las tres le gusta más y seleccione la opción que está a la izquierda
                                        que posee el símbolo <strong>más (+)</strong>.
                                    </p>
                                    <p class="card-text card-texto">
                                        Luego decida cuál
                                        de las tres actividades le gusta menos y seleccione la opción que está a la derecha
                                        y
                                        que posee el símbolo <strong>menos (-)</strong>.
                                    </p>
                                    <p class="card-text card-texto">
                                        Luego en la actividad del grupo de tres que le sobre,seleccione la opción del centro
                                        con el número <strong>cero (0)</strong>, esto indica que la actividad mencionada le
                                        es indiferente.
                                    </p>
                                    <p class="card-text card-texto">
                                        Finalmente al completar todos los bloques de actividades de cada página, se presiona
                                        el botón
                                        siguiente para enviar las respuestas de la página actual y avanzar a la siguiente
                                        parte dentro de la prueba.
                                    </p>
                                </div>
                            </div>
                            <div class="card mt-5 mb-5">
                                <h5 class="card-header text-center header-card card-titulo">Ejemplo</h5>
                                <div class="card-body body-card text-white">
                                    <p class="card-text card-texto">
                                        En el ejemplo que aparece a continuación, la persona que contestó la prueba, indicó
                                        en el primer grupo
                                        de tres actividades, que le gustaba <strong>más</strong> visitar un museo y en
                                        cambio, le gustaba
                                        <strong>menos</strong> hojear libros y revistas en una librería, Por consiguiente
                                        seleccionó la opción que
                                        está a la izquierda en la actividad <strong>R</strong> y la opción que está a la
                                        derecha en la actividad
                                        <strong>Q</strong> respectivamente, mientras que para la actividad
                                        <strong>P</strong> seleccionó la opción
                                        del centro ya que le resultó indiferente.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="card bloque col-8 col-lg-8 col-10 col-md-10  col-12 col-sm-12">
                                            <div class="card-body card-texto">
                                                <div class="col-12">
                                                    <h5 class="card-title literal">P. Visitar una galería de arte</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" checked disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" disabled> -
                                                    </label>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h5 class="card-title  literal">Q. Hojear libros y revistas en una
                                                        librería</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" checked disabled> -
                                                    </label>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h5 class="card-title  literal">R. Visitar un museo</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" checked disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" disabled> -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="card-text card-texto mt-4 mb-4">
                                        En el segundo grupo de tres actividades la misma persona indicó que le gustaba
                                        <strong>más</strong>
                                        coleccionar autográfos y <strong>menos</strong> coleccionar mariposas. Por
                                        consiguiente, seleccionó la
                                        opción de la izquierda en la actividad <strong>S</strong>, y la opción de la derecha
                                        en la actividad de la letra
                                        <strong>U</strong>, mientras que en la actividad de la letra <strong>T</strong>
                                        seleccionó la opción del centro
                                        indicando que le es indiferente.
                                    </p>
                                    <div class="row justify-content-center">
                                        <div class="card bloque col-8 col-lg-8 col-10 col-md-10 col-12 col-sm-12 mt-4">
                                            <div class="card-body card-texto">
                                                <div class="col-12">
                                                    <h5 class="card-title  literal">S. Coleccionar autógrafos</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" checked disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" disabled> -
                                                    </label>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h5 class="card-title  literal">T. Coleccionar monedas</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" checked disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" disabled> -
                                                    </label>
                                                </div>
                                                <div class="col-12 pt-3">
                                                    <h5 class="card-title  literal">U. Coleccionar mariposas</h5>
                                                </div>
                                                <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option1"
                                                            autocomplete="off" disabled> +
                                                    </label>
                                                    <label class="btn btn-secondary active">
                                                        <input type="radio" name="options" id="option2"
                                                            autocomplete="off" disabled> 0
                                                    </label>
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="options" id="option3"
                                                            autocomplete="off" checked disabled> -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <a href="/parte1" type="button"
                        class="btn col-5 col-lg-5 col-10 col-sm-10 text-light btn-lg btn-info boton ">
                        <h4>@if(session('id_prueba')) {{'Continuar prueba'}} @else{{'Iniciar prueba'}} @endif</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
