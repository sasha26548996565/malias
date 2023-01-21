<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class UserCurrencyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->get('currency') && ! session()->get('currency'))
        {
            Debugbar::info(32);
            $clientIP = $request->getClientIp();
            $localCurrency = geoip($clientIP)->getAttribute('currency');
            session()->put([
              'currency' => $localCurrency,
            ]);
        }

        return $next($request);
    }
}
