<?php

declare(strict_types=1);

namespace App\ModelFilters;

use Barryvdh\Debugbar\Facades\Debugbar;
use EloquentFilter\ModelFilter;

class ProductFilter extends ModelFilter
{
    public $relations = [];

    public function priceFrom(int $priceFrom)
    {
        return $this->where('price', '>=', $priceFrom * 100);
    }

    public function priceTo(int $priceTo)
    {
        return $this->where('price', '<=', $priceTo * 100);
    }
}
