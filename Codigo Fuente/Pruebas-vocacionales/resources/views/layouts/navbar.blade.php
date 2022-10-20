<nav class="navbar w-100 navbar-light nav text-light fixed-top">
    <div class="row">
        <div class="col-2">
            <a href={{ env('APP_URL') }}> <img class="navbar-brand img-fluid img-thumbnail rounded" width="250px"
                    src="{{ asset('img/logo.jpg') }}" alt="">
            </a>
        </div>
        <div class="col-10">
            <div class="row">
                <a href={{ env('APP_URL') }}>
                    <h3 class="text-light">Diagnóstico vocacional</h3>
                    
                </a>
                <h4 class="px-4 py-1"><a data-toggle="modal" href="#"
                    data-target="#confirmModal1"
                    ><i class="bi bi-info-circle-fill text-white"></i></a></h4>
            </div>
            @if (Session::has('id_prueba')) 
                <div class="row">
                    <a class="text-decoration-none" data-toggle="modal" href="#"
                        data-target="#confirmModal">
                        <p class="bg-danger px-2 text-white rounded">Salir de la prueba</p>
                    </a>  
               </div>
            @endif
        </div>
    </div>
</nav>
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="confirmModalLabel">Advertencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                Solamente se guardarán las partes de la prueba que estén completadas correctamente.¿Seguro que deseas
                salir de la prueba?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <form id="exit-form" action="{{ route('exitquiz') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a class="btn btn-primary"
                    onclick="event.preventDefault();
                    document.getElementById('exit-form').submit();">Si</a> 
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal1" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="confirmModalLabel">Información</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-dark">
                Recuerda que puedes retomar la prueba en cualquier momento,y que las respuestas se guardarán
                automáticamente al avanzar entre las partes de la prueba, solo sí todas las preguntas de la parte actual
                están contestadas correctamente.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">De acuerdo</button> 
            </div>
        </div>
    </div>
</div>

