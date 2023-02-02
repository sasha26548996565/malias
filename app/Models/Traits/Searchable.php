<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Observers\ProductObserver;

trait Searchable
{
    public static function bootSearchable(): void
    {
        if (config('services.search.enabled'))
            static::observe(ProductObserver::class);
    }

    public function getSearchIndex(): string
    {
        return $this->getTable();
    }

    public function getSearchType(): string
    {
        if (property_exists($this, 'useSearchType'))
            return $this->useSearchType;

        return $this->getTable();
    }

    public function toSearchArray(): array
    {
        return $this->toArray();
    }
}
