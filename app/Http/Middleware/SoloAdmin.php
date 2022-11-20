<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class SoloAdmin
{
    
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo){
            case ('1'):
                return $next($request);;//si es admin continua al HOME
            break;
            case ('2'):
                return redirect('gerentes'); //si es gerente lo redirige a la ruta admin
            break;
            case ('3'):
                return redirect('users'); //si es cliente lo redirige a la ruta user
            break;
        }
    }
}
