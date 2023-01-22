<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function show(string $slug): View
    {
        $category = Category::with('products')->where('slug', $slug)->first();
        $products = $category->products()->paginate(1);
        return view('main.category', compact('category', 'products'));
    }
}
