<?php

namespace App\Providers;

use App\Models\Product;
use Elastic\Elasticsearch\Client;
use Illuminate\Support\ServiceProvider;
use Elastic\Elasticsearch\ClientBuilder;
use App\Repositories\Products\EloquentRepository;
use App\Repositories\Products\ElasticsearchRepository;
use App\Repositories\Products\ProductRepositoryContract;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ProductRepositoryContract::class, function ($app) {
            if (! config('services.search.enabled'))
                return new EloquentRepository;

            return new ElasticsearchRepository($app->make(Client::class));
        });

        $this->bindSearchClient();
    }

    private function bindSearchClient(): void
    {
        $this->app->bind(Client::class, function ($app) {
            return ClientBuilder::create()->setHosts($app['config']->get('services.search.hosts'))->build();
        });
    }
}
