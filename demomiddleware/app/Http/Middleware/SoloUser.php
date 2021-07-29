<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SoloUser
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
        if (auth::user()->tipo == '2' ){
            return $next($request);
        }else{
            return redirect('user');
        }
        /*switch (auth::user()->tipo){
            case '1':
                return redirect('home');
                break;
            case '2':
                return $next($request);
                break;
        }*/
    }
}
