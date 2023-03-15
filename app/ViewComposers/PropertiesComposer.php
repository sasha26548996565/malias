<?php

declare(strict_types=1);

namespace App\ViewComposers;

use App\Models\Property;
use Illuminate\Contracts\View\View;

class PropertiesComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        return $view->with('properties', Property::all());
    }
}
