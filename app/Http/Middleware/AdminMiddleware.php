<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
        if (!Auth::check()) {
           return redirect('/login');
        }

        $user = Auth::user();

        // Si l'utilisateur est un administrateur, laissez-le passer
        if ($user->role == 'admin') {
            return $next($request);
        }

        if ($user->role=='client') {
            return redirect('/client');
        }

        if ($user->role=='eleveur') {
            return redirect('/eleveur');
        }

    }
}
