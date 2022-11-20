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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return redirect('home');;//si es admin continua al HOME
            break;
            case ('2'):
                return redirect('gerentes'); //si es gerente lo redirige a la ruta admin
            break;
            case ('3'):
                return next($request); //si es cliente lo redirige a la ruta user
            break;
        }
    }
}
