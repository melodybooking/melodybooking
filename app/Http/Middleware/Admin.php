<?php 

namespace App\Http\Middleware;

use Closure;

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->isAdmin() )
        {
            return $next($request);
        }

        return redirect('home');

    }

}