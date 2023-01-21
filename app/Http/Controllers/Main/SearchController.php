<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Main\SearchRequest;

class SearchController extends Controller
{
    public function searchProduct(SearchRequest $request): View
    {
        $searchString = $request->validated()['search'];
        $products = Product::with('category', 'images')->where('name', 'LIKE', '%'. $searchString .'%')
            ->orWhere('description', 'LIKE', '%'. $searchString .'%')->latest()->get();
        return view('main.search', compact('products'));
    }
}
