<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Requests\Main\FilterRequest;

class CategoryController extends Controller
{
    public function show(Request $request, string $slug): View
    {
        $category = Category::with('products')->where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->paginate(10);

        return view('main.category', compact('category', 'products'));
    }
}
