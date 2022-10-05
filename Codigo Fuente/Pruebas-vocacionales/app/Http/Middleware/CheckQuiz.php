<?php

namespace Pruebas\Http\Middleware;

use Closure;

class CheckQuiz
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */ 
    public function handle($request, Closure $next)
    {
        if (!session('id_prueba')) {
            session()->forget('completa');
            return redirect(env('APP_URL'))->withErrors('Debes ingresar toda tu información para iniciar una prueba o tu 
            correo previamente registrado para continuar
            una prueba que ya habias iniciado.');
        }
        return $next($request);
    }
}
