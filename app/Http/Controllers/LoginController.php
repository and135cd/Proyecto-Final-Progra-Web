<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
class LoginController extends Controller
{
    public function login(Request $request,Redirector $redirect)
    {
        $user = User::where('Nombre', $request->Nombre)->first();
        if($user->Password === md5($request->Password))
        {
            Auth::login($user);
            /* return redirect('post/create'); */

            if($request->Nombre === 'superadmin')
            {
                return redirect('far');
            }
            if($request->Nombre === 'Cliente'){
                return redirect('/');
            }
            if($request->Nombre === 'Admin'){
                return redirect('post');
            }
            
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
