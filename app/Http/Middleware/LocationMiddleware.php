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
        App::setLocale(session()->get('locale') ?? config('app.locale'));
        return $next($request);
    }
}
