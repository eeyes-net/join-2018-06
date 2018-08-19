<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;

class IsAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws AuthorizationException
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && in_array(Auth::user()->username, config('admin')))
        {
            return $next($request);
        }
        throw new AuthorizationException("您不是管理员");
    }
}