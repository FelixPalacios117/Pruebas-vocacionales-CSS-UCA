<?php

namespace Pruebas\Http\Middleware;

use Closure;

class Complete
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
        if (!session('completa')) {
            return back();
        }
        return $next($request);
    }
}
