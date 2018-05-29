<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $guest = Auth::user();
        if($guest == null){
            return redirect(route('login'));
        }
        if (!$request->user()->hasRole($role)) {
            return redirect(route('login'));
        }
        return $next($request);
    }
}
