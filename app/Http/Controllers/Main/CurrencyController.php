<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CurrencyController extends Controller
{
    public function swapCurrency(string $code): RedirectResponse
    {
        session(['currency' => $code]);
        return back();
    }
}
