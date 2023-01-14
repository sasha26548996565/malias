<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $newestCategories = Category::latest()->take(3)->get();
        $newestProducts = Product::latest()->take(10)->get();
        $saleProducts = Product::sale()->latest()->take(10)->get();
        return view('main.index', compact('newestCategories', 'newestProducts', 'saleProducts'));
    }
}
