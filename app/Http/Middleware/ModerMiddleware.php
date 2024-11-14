<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Response;
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> a04c7158db67accb3e6d5b879b5b4e4edca1f5c5

class ModerMiddleware
{
    /**
     * Handle an incoming request.
     *
<<<<<<< HEAD
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
=======
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('moderator')->check()) {
            return redirect('/login')->with('error', 'Acceso no autorizado.');
        }

>>>>>>> a04c7158db67accb3e6d5b879b5b4e4edca1f5c5
        return $next($request);
    }
}
