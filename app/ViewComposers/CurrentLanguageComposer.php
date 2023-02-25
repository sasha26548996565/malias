<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Language;
use Illuminate\Contracts\View\View;

class CurrentLanguageComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        $currentLanguage = Language::where('slug', session()->get('locale'))->first();
        return $view->with('currentLanguage', $currentLanguage);
    }
}
