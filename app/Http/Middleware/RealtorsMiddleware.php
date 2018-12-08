<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RealtorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::authenticate();
        if (!$user && !($user->isSuperAdmin() || $user->isRealtors())) {
            abort(403);
        }
        return $next($request);
    }
}
