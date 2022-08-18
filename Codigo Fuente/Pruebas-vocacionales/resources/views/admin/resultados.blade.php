@extends('layouts.container')
@section('titulo', 'Pruebas vocacionales')
@section('navbar')
    @include('layouts.navbar')
@section('body')
    <div class="container margen">
        <div class="row pt-4">
            <div class="col-12 pt-5 pb-3 table-responsive">
                <table class="table table-borderless hover">
                    <thead>
                      <tr class="points text-center">  
                        <th colspan="4" scope="col"><h3>Puntaje de Félix Guevara</h3></th> 
                      </tr>
                    </thead>
                    <tbody class="bg-light text-center">
                      <tr>
                        <td><h5>V. &nbsp; 34</h5></td>
                        <td><h5>0. &nbsp; 34</h5></td>
                        <td><h5>1. &nbsp; 34</h5></td>
                        <td><h5>2. &nbsp; 34</h5></td>
                      </tr>
                      <tr>  
                        <td><h5>3. &nbsp; 34</h5></td>
                        <td><h5>4. &nbsp; 34</h5></td>
                        <td><h5>5. &nbsp; 34</h5></td>
                        <td><h5>6. &nbsp; 34</h5></td>
                      </tr>
                      <tr> 
                        <td><h5>7. &nbsp; 34</h5></td>
                        <td><h5>8. &nbsp; 34</h5></td>
                        <td><h5>9. &nbsp; 34</h5></td>
                        <td></td> 
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row">
            <div class="container login mt-4 margen">

            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layouts.footer')
