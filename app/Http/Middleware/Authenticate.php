<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Routing\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (!$request->expectsJson()) {
            $middleware = $request->route()->gatherMiddleware();
            if ($middleware[1] == 'auth:web') {
                return route('admin:login');
            }else {
                return route('signin');
            }
            if ($middleware[1] == 'auth:agency') {
                return route('agency:agencypanel');
            }
        }
    }
}
