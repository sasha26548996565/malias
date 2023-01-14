<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class RecentProductsComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        return $view->with('recentProducts', Product::latest()->take(5)->get());
    }
}
