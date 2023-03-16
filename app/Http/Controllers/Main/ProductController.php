<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::latest()->paginate(10);
        return view('main.products', compact('products'));
    }

    public function show(string $slug): View
    {
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Product::where('category_id', $product->category->id)->latest()->get();
        return view('main.product', compact('product', 'relatedProducts'));
    }
}
