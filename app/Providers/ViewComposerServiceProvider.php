<?php

declare(strict_types=1);

namespace App\Providers;

use App\ViewComposers\CategoryViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('includes.categories', CategoryViewComposer::class);
    }
}
