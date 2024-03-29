<?php

namespace App\Http\Middleware;

use Closure;

class RoleChecked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!$request->user()||!$request->user()->hasRole($role))
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
