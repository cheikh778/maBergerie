<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EleveurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
        if (!Auth::check()) {
           return redirect('/login');
        }

        $user = Auth::user();

        // Si l'utilisateur est un eleveur, laissez-le passer
        if ($user->role == 'eleveur') {
            return $next($request);
        }

        if ($user->role=='admin') {
            return redirect('/admin');
        }

        if ($user->role=='client') {
            return redirect('/client');
        }


    }
}
