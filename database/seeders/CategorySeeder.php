<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private array $categories = [
        ['name' => 'TV & Audio', 'slug' => 'TV-&-Audio'],
        ['name' => 'cameras', 'slug' => 'cameras'],
        ['name' => 'Smart phones', 'slug' => 'smart-phones'],
    ];

    public function run(): void
    {
        foreach ($this->categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
