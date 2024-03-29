@extends('layouts.container') 
@section('body')
@include('layouts.navbar')
    <div class="container-fluid margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">{{ $preguntas_cinco->parte }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid login mt-5 margen"> 
                    @if ($errors->any())
                    <div class="row justify-content-center mt-5">
                        <div class="col-8">
                            <div class="alert alert-danger">
                                <h2 class="text-center"> El formulario contiene errores</h2>
                                <ul>
                                    <li>
                                        <h4>Recuerda que por cada bloque de tres actividades debes seleccionar solamente una
                                            que te gusta más, una que te gusta menos
                                            y una que te es indiferente.
                                        </h4> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif 

                <form method="POST" action={{ url('savePartFive') }}>
                    {{ csrf_field() }}
                    <div class="row justify-content-center mt-5 mb-5">
                        @foreach ($preguntas_cinco->bloques as $preguntas)
                            <div class="mx-3 my-3 card bloque col-lg-5 col-md-10 col-sm-12 col-xs-12">
                                <div class="card-body card-texto">
                                    <div class="col-12">
                                        <h5 class="card-title literal">{{ $preguntas->name1 }}.
                                            {{ $preguntas->actividad1 }}
                                        </h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name1) ? (old($preguntas->name1) == '+' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name1 }}
                                                {{ old($preguntas->name1) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                value="+" required>
                                            +
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name1) ? (old($preguntas->name1) == '0' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name1 }} value="0"
                                                {{ old($preguntas->name1) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required>
                                            0
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name1) ? (old($preguntas->name1) == '-' ? 'form-error' : '') : '' }}">
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
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name2) ? (old($preguntas->name2) == '+' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name2 }} value="+"
                                                {{ old($preguntas->name2) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 1] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> +
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name2) ? (old($preguntas->name2) == '0' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name2 }} value="0"
                                                {{ old($preguntas->name2) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 1] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> 0
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name2) ? (old($preguntas->name2) == '-' ? 'form-error' : '') : '' }}">
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
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name3) ? (old($preguntas->name3) == '+' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name3 }} value="+"
                                                {{ old($preguntas->name3) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 2] == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> +
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name3) ? (old($preguntas->name3) == '0' ? 'form-error' : '') : '' }}">
                                            <input type="radio" name={{ $preguntas->name3 }} value="0"
                                                {{ old($preguntas->name3) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                @if (isset($arreglo) && $arreglo[$loop->index * 3 + 2] == '0') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                                required> 0
                                        </label>
                                        <label
                                            class="btn btn-secondary
                                        {{ $errors->has($preguntas->name3) ? (old($preguntas->name3) == '-' ? 'form-error' : '') : '' }}">
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
                        <button type="submit" name="btnAnterior" value="anterior"
                            class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-lg btn-info boton mt-3">
                            <h4>Anterior</h4>
                        </button>
                        <button type="submit" name="btnSiguiente" value="siguiente"
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
