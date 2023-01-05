<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class DisableIsNewProduct extends Command
{
    private Product $product;
    protected $signature = 'product:disableIsNew';
    protected $description = 'unset label is new for old product';

    public function __construct(Product $product)
    {
        parent::__construct();
        $this->product = $product;
    }

    public function handle(): int
    {
        foreach ($this->product->all() as $product)
            if ($product->wasPublishedRecently())
                $product->disableIsNew();

        return Command::SUCCESS;
    }
}
