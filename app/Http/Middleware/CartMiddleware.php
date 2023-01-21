<?php

namespace App\Http\Middleware;

use Closure;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class CartMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $cartId = session()->get('cartId');
        if ($cartId == null)
            return back();

        if (CartFacade::session($cartId)->getContent()->count() <= 0)
            return back();

        return $next($request);
    }
}
