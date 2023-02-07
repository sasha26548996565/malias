<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class WithlistController extends Controller
{
    public function add(Product $product): RedirectResponse
    {
        Auth::user()->withlistProducts()->toggle($product->id);
        return back();
    }
}
