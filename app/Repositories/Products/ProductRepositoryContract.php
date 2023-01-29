<?php

declare(strict_types=1);

namespace App\Repositories\Products;

use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryContract
{
    public function search(string $query = ''): Collection;
}
