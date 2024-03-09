<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {

            if(Auth::user()->role_as == '1')
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('alert','Acesso Negado! Você não é um Administrador');
            }

        }

        else
        {
            return redirect('/')->with('status');
        }
        
    }
}
