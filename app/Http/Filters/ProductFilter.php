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
    private const SORT = 'sort';

    public function getCallbacks(): array
    {
        return [
            self::PRICE_FROM => [$this, 'priceFrom'],
            self::PRICE_TO => [$this, 'priceTo'],
            self::PROPERTIES => [$this, 'properties'],
            self::SORT => [$this, 'sort'],
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

    public function sort(Builder $builder, $value): void
    {
        if ($value == 'name')
            $builder->orderBy('name');
        else if ($value == 'nameR')
            $builder->orderBy('name', 'DESC');
        else if ($value == 'price')
            $builder->orderBy('price');
        else if ($value == 'rate')
            $builder->orderBy('rate', 'DESC');
        else if ($value == 'rateR')
            $builder->orderBy('rate', 'DESC');
    }
}
