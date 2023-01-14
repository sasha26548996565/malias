<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class HotDealProductComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        return $view->with('hotDealProducts', Product::where('discount', '>=', 10)->latest()->get());
    }
}
