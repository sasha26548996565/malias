<?php

declare(strict_types=1);

namespace App\Repositories\Products;

use App\Models\Product;
use Elastic\Elasticsearch\Client;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\Products\ProductRepositoryContract;
use Illuminate\Support\Arr;

class ElasticsearchRepository implements ProductRepositoryContract
{
    public function __construct(private Client $elasticsearch)
    {}

    public function search(string $query = ''): Collection
    {
        $items = $this->searchOnElasticsearch($query);

        return $this->buildCollection($items);
    }

    private function searchOnElasticsearch(string $query = ''): array
    {
        $product = new Product;

        $items = $this->elasticsearch->search([
            'index' => $product->index,
            'type' => $product->type,
            'body' => [
                'query' => [
                    'multi_match' => [
                        'fields' => ['name^5', 'description'],
                        'query' => $query,
                    ],
                ],
            ],
        ]);

        return $items;
    }

    private function buildCollection(array $items): Collection
    {
        $ids = Arr::pluck($items['hits']['hits'], '_id');

        return Product::findMany($ids)->sortBy(function ($product) use ($ids) {
            return array_search($product->getKey(), $ids);
        });
    }
}
