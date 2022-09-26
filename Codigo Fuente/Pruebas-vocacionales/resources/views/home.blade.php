@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.admin_navbar')
@section('body')
<div class="container-fluid margen">
<div class="row">
            <div class="col-12 text-light pt-5 pb-3">
                <h1 class="text-center">Listado de pruebas</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid login mt-5 margen mx-5 table-responsive">
                <div class="row">
                <form method="GET" action="{{route('home')}}">
                    <div class="input-group input-group-sm mt-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="buscador">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                        <input type="text" required class="form-control col-lg-4" placeholder="Buscar" aria-label="buscador"
                            aria-describedby="buscador" name="buscador" value={{$cadena}}>
                        </input>
                        <button type="submit" name="btnBuscar" value="Buscar"
                            class="btn col-3 col-lg-4 col-sm-2 text-light btn-sm btn-info boton mx-2">
                            <h7>Buscar</h7>
                        </button>
                    </div>
                </form>
                <form method="GET" action="{{route('home')}}">
                    <div class="input-group input-group-sm mt-2">
                        <select class="custom-select" value={{$filtro}} id="filtro" name="filtro" required>
                                <option value="" selected disabled>Seleccionar filtro</option>
                                <option value="1">Revisado</option>
                                <option value="0">Sin revisar</option>
                        </select>
                        <button type="submit" name="btnFiltrar" value="Filtrar"
                            class="btn col-3 col-lg-3 col-sm-2 text-light btn-sm btn-info boton mx-2">
                            <h7>Filtrar</h7>
                        </button>
                    </div>
                </form>
                <form method="GET" action="{{route('home')}}">
                    <div class="input-group input-group-sm mt-2">
                        <button type="submit" name="btnRefrescar" value="refrescar"
                            class="text-light btn mt-auto mx-4">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                    </div>
                </form>
                </div>
                <table class="table text-center text-white">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRES</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">GÉNERO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">TELÉFONO</th>
                            <th scope="col">REVISIÓN</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pruebas as $prueba)
                        <form method="POST" action="/resultados/{{Crypt::encrypt($prueba->id)}}" >
                        {{ csrf_field() }}
                            <tr>
                                <td class="align-middle">
                                    <h3 class="align-middle">
                                        <i class="bi bi-file-earmark-person-fill align-middle mx-2"></i>
                                    </h3>
                                </td>        
                                <td class="align-middle">
                                    {{ $prueba->id }}
                                </td>
                                <td class="align-middle">
                                    {{ $prueba->nombre }}
                                </td>
                                <td class="align-middle">
                                    {{ $prueba->apellido }}
                                </td>
                                <td class="align-middle">
                                    {{ $prueba->genero }}
                                </td>
                                <td class="align-middle">
                                    {{ $prueba->correo }}
                                </td>
                                <td class="align-middle">
                                    {{ $prueba->telefono }}
                                </td>
                                <td class="align-middle">
                                    @if($prueba->revisado)
                                    Revisado
                                    @else
                                    Sin revisar
                                    @endif
                                </td>
                                <td class="align-middle">
                                    <button type="submit" value="{{$prueba->id}}"
                                        class="btn text-light btn-sm btn-info boton mx-lg-2">
                                        <h7>Ver resultados</h7>
                                    </button>
                                    <button type="submit" name="btnReiniciar" value="reiniciar"
                                        data-toggle="modal" data-target="#restartModal"
                                        class="btn text-light btn-sm btn-info boton mx-lg-2">
                                        <h7>Reiniciar prueba</h7>
                                    </button>
                                    <div class="modal fade" id="restartModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="confirmModalLabel">Confirmación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-success">
                                                    ¿Seguro que desea reinicar la prueba?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                                    <form method="POST" action="/home/reiniciar/{{Crypt::encrypt($prueba->id)}}" >
                                                    {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-primary">Si</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                {{ $pruebas->links( "pagination::bootstrap-4") }}

                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
