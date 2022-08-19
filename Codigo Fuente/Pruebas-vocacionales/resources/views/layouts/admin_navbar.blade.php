<nav class="navbar w-100 navbar-light nav text-light fixed-top">
    <div class="row">
        <div class="col-2">
            <a href="/home"> <img class="navbar-brand img-fluid img-thumbnail rounded" width="250px"
                    src="{{ asset('img/logo.jpg') }}" alt="">
            </a>
        </div>
        <div class="column">
            <div class="titulo">
                <a href="/home">
                    <h3 class="text-light">Diagnóstico vocacional</h3>
                </a>
            </div>
            <div class="titulo">
                <a class="text-decoration-none" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <p class="bg-danger px-2 text-white rounded">Cerrar sesión</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        
        
    </div>
</nav>
