<?php

namespace App\Http\Middleware;

use Closure;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocationMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (is_null(session()->get('locale')))
            session(['locale' => config('app.locale')]);

        App::setLocale(session()->get('locale'));
        return $next($request);
    }
}
