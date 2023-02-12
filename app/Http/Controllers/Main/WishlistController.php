<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class WishlistController extends Controller
{
    public function index(): View
    {
        $products = Auth::user()->wishlistProducts()->paginate(1);
        return view('main.wishlist', compact('products'));
    }

    public function toggleProduct(Product $product): RedirectResponse
    {
        Auth::user()->wishlistProducts()->toggle($product->id);
        return to_route('product.show', $product->slug);
    }
}
