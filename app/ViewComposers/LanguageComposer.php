<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Language;
use Illuminate\Contracts\View\View;

class LanguageComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        return $view->with('languages', Language::latest()->get());
    }
}
