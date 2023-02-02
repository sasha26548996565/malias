<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Product;
use Elastic\Elasticsearch\Client;

class ProductObserver
{
    public function __construct(private readonly Client $elasticsearch)
    {}

    public function saved(Product $product): void
    {
        $this->elasticsearch->index([
            'id' => $product->getKey(),
            'index' => $product->getSearchIndex(),
            'type' => $product->getSearchType(),
            'body' => $product->toSearchArray(),
        ]);
    }

    public function deleted(Product $product): void
    {
        $this->elasticsearch->delete([
            'id' => $product->getKey(),
            'index' => $product->getSearchIndex(),
            'type' => $product->getSearchType(),
        ]);
    }
}
