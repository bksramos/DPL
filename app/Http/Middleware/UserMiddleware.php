<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->status)
        {
            $inactive = Auth::user()->status =="0";
            Auth::logout();

            if ($inactive == 0) {
                $message = 'Sua conta está inativa. Por favor, contato o administrador.';
            }
            return redirect()->route('login')
                ->with('status', $message)
                ->withErrors(['email'=>'Sua conta está inativa. Por favor, contate o administrador.'])
                ;
        }
        return $next($request);
    }
}
