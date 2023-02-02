<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Elastic\Elasticsearch\Client;

class ReindexProductCommand extends Command
{
    protected $signature = 'search:reindex';
    protected $description = 'Command description';
    private Client $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        parent::__construct();
        $this->elasticsearch = $elasticsearch;
    }

    public function handle()
    {
        $this->info('reindex products..');

        foreach (Product::cursor() as $product)
        {
            $this->elasticsearch->index([
                'id' => $product->getKey(),
                'index' => $product->getSearchIndex(),
                'type' => $product->getTypeSearch(),
                'body' => $product->toSearchArray(),
            ]);

            $this->output->write('.');
        }

        $this->info('Done');
        return Command::SUCCESS;
    }
}
