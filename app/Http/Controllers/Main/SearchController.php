<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Requests\Main\SearchRequest;
use App\Repositories\Products\ProductRepositoryContract;

class SearchController extends Controller
{
    public function __construct(private ProductRepositoryContract $productRepositoryContract)
    {}

    public function searchProduct(SearchRequest $request): View
    {
        $products = $this->productRepositoryContract->search($request->validated()['search']);
        return view('main.search', compact('products'));
    }
}
