<?php

declare(strict_types=1);

namespace App\Http\Filters;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    private const PRICE_FROM = 'priceFrom';
    private const PRICE_TO = 'priceTo';
    private const PROPERTIES = 'properties';

    public function getCallbacks(): array
    {
        return [
            self::PRICE_FROM => [$this, 'priceFrom'],
            self::PRICE_TO => [$this, 'priceTo'],
            self::PROPERTIES => [$this, 'properties'],
        ];
    }

    public function priceFrom(Builder $builder, $value): void
    {
        $builder->where('price', '>=', $value);
    }

    public function priceTo(Builder $builder, $value): void
    {
        $builder->where('price', '<=', $value);
    }

    public function properties(Builder $builder, $value): void
    {
        $builder->whereHas('propertyOption', function(Builder $builder) use ($value) {
            $builder->where('name', $value);
        });
    }
}
