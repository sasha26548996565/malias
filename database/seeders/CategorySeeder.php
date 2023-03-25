<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private array $categories = [
        ['name' => 'TV & Audio', 'slug' => 'tv-audio', 'parent_id' => null],
        ['name' => 'cameras', 'slug' => 'cameras', 'parent_id' => null],
        ['name' => 'Smart phones', 'slug' => 'smart-phones', 'parent_id' => null],
    ];

    public function run(): void
    {
        foreach ($this->categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
