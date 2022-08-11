@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    {{ $contador = 0 }}
    <div class="container-fluid margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">{{ $preguntas_dos->parte }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid login mt-5 margen mx-5">
                @if ($errors->any())
                    <div class="row justify-content-center mt-5">
                        <div class="col-8">
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

                <form method="POST" action={{ url('savePartTwo') }}>
                    {{ csrf_field() }}
                    <div class="row justify-content-center mt-5 mb-5">
                        @foreach ($preguntas_dos->bloques as $preguntas)
                            <div class="mx-3 my-3 card bloque col-5 col-lg-5 col-5 col-md-5 col-12 col-sm-12">
                                <div class="card-body card-texto">
                                    <div class="col-12">
                                        <h5 class="card-title literal">{{ $preguntas->name1 }}.
                                            {{ $preguntas->actividad1 }}
                                        </h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name1 }}
                                                {{ old($preguntas->name1) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                value="+" required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name1 }} value="0"
                                                {{ old($preguntas->name1) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required>
                                            0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name1 }} value="-"
                                                {{ old($preguntas->name1) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3] == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> -
                                        </label>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="card-title  literal">{{ $preguntas->name2 }} .
                                            {{ $preguntas->actividad2 }}</h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name2 }} value="+"
                                                {{ old($preguntas->name2) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 1] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name2 }} value="0"
                                                {{ old($preguntas->name2) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 1] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> 0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name2 }} value="-"
                                                {{ old($preguntas->name2) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 1] == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> -
                                        </label>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="card-title  literal">{{ $preguntas->name3 }} .
                                            {{ $preguntas->actividad3 }}</h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name3 }} value="+"
                                                {{ old($preguntas->name3) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 2] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name3 }} value="0"
                                                {{ old($preguntas->name3) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 2] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> 0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name3 }} value="-"
                                                {{ old($preguntas->name3) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 2] == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> -
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-around mb-5">
                        <a href="/parte1"
                            class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-lg btn-info boton mt-3">
                            <h4>Anterior</h4>
                        </a>
                        <button type="submit"
                            class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-lg btn-info boton mt-3">
                            <h4>Siguiente</h4>
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')