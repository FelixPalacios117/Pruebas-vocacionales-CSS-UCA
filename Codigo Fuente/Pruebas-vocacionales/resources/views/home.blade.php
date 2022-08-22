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
                <form method="GET" action="{{route('home')}}">
                    <div class="input-group input-group-sm mt-2 col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="buscador">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control col-lg-4" placeholder="Buscar" aria-label="buscador"
                            aria-describedby="buscador" name="buscador">
                        </input>
                        <button type="submit" name="btnBuscar" value="Buscar"
                            class="btn col-2 col-lg-2 col-10 col-sm-10 text-light btn-sm btn-info boton mx-2">
                            <h7>Buscar</h7>
                        </button>
                        <button type="submit" name="btnRefrescar" value="refrescar"
                            class="text-light btn">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                    </div>
                </form>
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
                        <form>
                            @foreach($pruebas as $prueba)
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
                                    <button type="submit" name="btnResultados" value="resultados"
                                        class="btn text-light btn-sm btn-info boton mx-lg-2">
                                        <h7>Ver resultados</h7>
                                    </button>
                                    <button type="submit" name="btnReiniciar" value="reiniciar"
                                        class="btn text-light btn-sm btn-info boton mx-lg-2">
                                        <h7>Reiniciar prueba</h7>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </form>
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
