<?php

namespace App\Http\Middleware;

use Closure;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class CartMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('cartId') == null)
            return back();

        return $next($request);
    }
}
