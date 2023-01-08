<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Language;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LocationController extends Controller
{
    public function swapLanguage(): void
    {
        $locale = $_GET['locale'];
        if (! in_array($locale, Language::select('slug')->pluck('slug')->toArray()))
            $locale = config('app.locale');

        App::setLocale($locale);
        session(['locale' => $locale]);
    }
}
