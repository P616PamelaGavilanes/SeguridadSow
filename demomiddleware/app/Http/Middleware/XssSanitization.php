<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XssSanitization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();
        array_walk_recursive($input, function(&$input) {
        $input = strip_tags($input);//eliminar o limpiar las etiquetas
        });
        $request->merge($input);//fusión 
        return $next($request);
    }
}
