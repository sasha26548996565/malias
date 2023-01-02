<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\ViewComposers\CategoryComposer;
use Illuminate\Support\ServiceProvider;
use App\ViewComposers\HotDealProductComposer;
use App\ViewComposers\PopularProductComposer;
use App\ViewComposers\RecentProductsComposer;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('includes.categories', CategoryComposer::class);
        View::composer('includes.header', CategoryComposer::class);
        View::composer('main.index', HotDealProductComposer::class);
        View::composer('includes.bestsellers', PopularProductComposer::class);
        View::composer('includes.recent_products', RecentProductsComposer::class);
    }
}
