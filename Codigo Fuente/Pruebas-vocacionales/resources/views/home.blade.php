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
                                        class="btn text-light btn-sm btn-info boton mt-3">
                                        <h7>Ver resultados</h7>
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
