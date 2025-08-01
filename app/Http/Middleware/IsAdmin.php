<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class IsAdmin
{
    public function handle($request, Closure $next)
    {
        $user = $request->session()->get('user');

        if ($user && $user['role'] === 'admin') {
            return $next($request);
        }

        return response('Unauthorized.', 401);
    }
}
