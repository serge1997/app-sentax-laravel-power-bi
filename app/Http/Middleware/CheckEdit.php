<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckEdit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        

        if( Auth::user()->funcao != 'administrador'){

            Auth::logout();
            return redirect()->route('logar')
                ->with('err', "Você tentou de fazer uma tarefa restrita, sua sessão foi interopida");
        }

        return $next($request);
    }
}
