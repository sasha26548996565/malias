<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Main\FilterRequest;

class CategoryController extends Controller
{
    public function show(string $slug, FilterRequest $request): View
    {
        $filterParams = price_replace($request->validated()['price']);

        $category = Category::with('products')->where('slug', $slug)->first();
        $products = Product::filter($filterParams)->where('category_id', $category->id)->paginate(1);
        return view('main.category', compact('category', 'products'));
    }
}
