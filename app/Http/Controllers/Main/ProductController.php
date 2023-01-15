<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show(string $slug): View
    {
        $product = Product::where('slug', $slug)->first()->load(['optionValues.option']);
        $relatedProducts = Product::where('category_id', $product->category->id)->latest()->get();

        $options = $product->optionValues->mapToGroups(function ($item) {
            return [$item->option->title => $item];
        });
        return view('main.product', compact('product', 'relatedProducts', 'options'));
    }
}
