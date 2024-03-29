@extends('layouts.container') 
@section('body')
@include('layouts.admin_navbar')
    <div class="container margenresultados">
        <div class="row pt-4">
            <div class="col-12 pt-5 table-responsive">
                <table class="table table-borderless hover">
                    <thead>
                        <tr class="points text-center">
                            <th colspan="4" scope="col">
                                <h3>Puntaje de {{$alumno[0]->nombre}} {{ $alumno[0]->apellido}}</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-light text-center">
                        <tr>
                            <td>
                                <h5>V. &nbsp; {{$validez}}</h5>
                            </td>
                            <td>
                                <h5>0. &nbsp; {{$cero}}</h5>
                            </td>
                            <td>
                                <h5>1. &nbsp; {{$uno}}</h5>
                            </td>
                            <td>
                                <h5>2. &nbsp; {{$dos}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>3. &nbsp; {{$tres}}</h5>
                            </td>
                            <td>
                                <h5>4. &nbsp; {{$cuatro}}</h5>
                            </td>
                            <td>
                                <h5>5. &nbsp; {{$cinco}}</h5>
                            </td>
                            <td>
                                <h5>6. &nbsp; {{$seis}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>7. &nbsp; {{$siete}}</h5>
                            </td>
                            <td>
                                <h5>8. &nbsp; {{$ocho}}</h5>
                            </td>
                            <td>
                                <h5>9. &nbsp; {{$nueve}}</h5>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="mx-3 margen">
        <div class="row text-white text-center">
            @foreach ($respuestas->all() as $item)
                <div class="col-1 col-xl-1 col-1 col-lg-1 col-6 col-sm-6 col-3 col-md-3">
                    <div class="row text-center">
                        <div class="resultsdiv pt-2 pb-3">
                            <h3><strong>+ {{ 12 - $loop->index }} -</strong></h3>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+0]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+1]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+2]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_uno, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+3]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled>{{$actividades[($loop->index*42)+4]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+5]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_dos, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+6]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+7]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+8]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_tres, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+9]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+10]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+11]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cuatro, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+12]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+13]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled>{{$actividades[($loop->index*42)+14]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_cinco, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+15]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+16]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+17]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_seis, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+18]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+19]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+20]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_siete, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+21]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+22]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+23]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_ocho, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+24]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+25]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+26]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_nueve, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+27]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+28]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+29]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_diez, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+30]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+31]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+32]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_once, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+33]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+34]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+35]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_doce, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+36]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+37]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+38]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_trece, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center margenFinal">
                        <div class="resultsdiv mt-1 pb-3">
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 0, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-3 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+39]}}
                                </label>
                                <label class="btn btn-secondary mt-3 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 0, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 1, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+40]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 1, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                            <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 2, 1) == '+') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled autocomplete="off"> +
                                </label>
                                <label class="btn btn-dark mt-2 col-2">
                                    <input type="radio" disabled> {{$actividades[($loop->index*42)+41]}}
                                </label>
                                <label class="btn btn-secondary mt-2 col-3">
                                    <input type="radio"
                                        @if (substr($item->bloque_catorce, 2, 1) == '-') {{ 'checked=' . '"' . 'checked' . '"' }} @endif
                                        disabled> -
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="w-100 row justify-content-around mb-5">
                <button  onclick="location.href='{{ url('home') }}'" type="submit" name="btnAnterior" value="anterior"
                    class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-lg btn-info boton mt-3">
                    <h4>Regresar</h4>
                </button>
                @if($alumno[0]->revisado == 0)
                <button type="button" name="btnFinalizarRevision" value="finalizar"
                    data-toggle="modal" data-target="#confirmModal"
                    class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-lg btn-info boton mt-3">
                    <h4>Finalizar revisión</h4>
                </button>
                @endif
                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-success" id="confirmModalLabel">Confirmación</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-success">
                                ¿Seguro que desea finalizar la revisión?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                <form method="POST" action={{ env('APP_URL') }}/resultados/revision/{{$id}}>
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">Si</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 