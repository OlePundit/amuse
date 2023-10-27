<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoachesAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        
        // Check if the user has coach credentials
        if ($user->isCoach()) {
            return $next($request);
        }
        
        // Redirect to a different route if not a coach
        return redirect()->route('home');
    }

}
