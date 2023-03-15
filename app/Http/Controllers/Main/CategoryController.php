<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Filters\ProductFilter;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(Request $request, string $categorySlug): View
    {
        $category = Category::with('products')->where('slug', $categorySlug)->first();
        $products = Product::with('category')->where('category_id', $category->id)->latest()->paginate(10);
        if ($request->ajax())
        {
            $filter = app()->make(ProductFilter::class, ['queryParams' =>
                array_filter([
                        'priceFrom' => currency($request->priceFrom * 100, 'USD', currency()->getUserCurrency(), false),
                        'priceTo' => currency($request->priceTo * 100, 'USD', currency()->getUserCurrency(), false),
                        'properties' => $request
                    ])
                ]);
            $products = Product::where('category_id', $category->id)->filter($filter)->paginate(10);
            return view('includes.ajax.card_product', compact('products'));
        }

        return view('main.category', compact('category', 'products'));
    }
}
