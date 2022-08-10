@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container-fluid margen">
        <div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">{{ $preguntas_uno->parte }}</h1>
            </div>
            @if ($errors->any())
                <div class="col-12">
                    <div class="alert alert-danger">
                        <h1 class="text-center"> El formulario contiene errores</h1>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="container-fluid login mt-5 margen mx-5">
                <form method="POST" action={{ url('quiz') }}>
                    {{ csrf_field() }}
                    <div class="row justify-content-center mt-5 mb-5">
                        @foreach ($preguntas_uno->bloques as $preguntas)
                            <div class="mx-3 my-3 card bloque col-5 col-lg-5 col-5 col-md-5 col-12 col-sm-12">
                                <div class="card-body card-texto">
                                    <div class="col-12">
                                        <h5 class="card-title literal">{{ $preguntas->name1 }} .
                                            {{ $preguntas->actividad1 }}
                                        </h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name1 }}
                                                {{ old($preguntas->name1) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }}
                                                value="+" required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name1 }} value="0" 
                                            {{ old($preguntas->name1) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }}required> 0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name1 }} value="-" 
                                            {{ old($preguntas->name1) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> -
                                        </label>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="card-title  literal">{{ $preguntas->name2 }} .
                                            {{ $preguntas->actividad2 }}</h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name2 }} value="+" 
                                            {{ old($preguntas->name2) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name2 }} value="0" 
                                            {{ old($preguntas->name2) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> 0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name2 }} value="-" 
                                            {{ old($preguntas->name2) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> -
                                        </label>
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="card-title  literal">{{ $preguntas->name3 }} .
                                            {{ $preguntas->actividad3 }}</h5>
                                    </div>
                                    <div class="col-12 btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name3 }} value="+" 
                                            {{ old($preguntas->name3) == '+' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> +
                                        </label>
                                        <label class="btn btn-secondary active">
                                            <input type="radio" name={{ $preguntas->name3 }} value="0" 
                                            {{ old($preguntas->name3) == '0' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> 0
                                        </label>
                                        <label class="btn btn-secondary">
                                            <input type="radio" name={{ $preguntas->name3 }} value="-" 
                                            {{ old($preguntas->name3) == '-' ? 'checked=' . '"' . 'checked' . '"' : '' }} required> -
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-center mb-5">
                        <button type="submit" class="btn col-2 col-lg-2 col-6 col-sm-6 text-light btn-lg btn-info boton ">
                            <h4>Siguiente</h4>
                        </button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
<script>
    var msg = '{{ Session::get('alert') }}';
    var exist = '{{ Session::has('alert') }}';
    if (exist) {
        alert(msg);
    }
</script>
@section('footer')
    @include('layouts.footer')
