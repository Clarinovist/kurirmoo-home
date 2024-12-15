<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
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
         // Check if the user is authenticated
         if (!Auth::check()) {
            // Redirect to login page if not authenticated
            toast('Anda Belum Login','error');
            return redirect()->route('login'); // You can replace 'login' with your actual login route name
        }

        // Proceed with the request if authenticated
        return $next($request);
    }
}
