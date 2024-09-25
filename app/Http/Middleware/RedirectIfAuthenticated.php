<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && $guard == 'admin') {
                dd('admin');

                return redirect(RouteServiceProvider::ADMIN_HOME);
            }
            if (Auth::guard($guard)->check() && $guard == 'merchant') {
                dd('merchant');

                return redirect(RouteServiceProvider::MERCHANT_HOME);
            }
            if (Auth::guard($guard)->check()) {
                dd('web');

                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
