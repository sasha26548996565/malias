<?php

declare(strict_types=1);

namespace App\Repositories\Products;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class EloquentRepository implements ProductRepositoryContract
{
    public function search(string $query = ''): Collection
    {
        return Product::search($query)->get();
    }
}
