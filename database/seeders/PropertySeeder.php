<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    private array $properties = [
        ['name' => 'Color', 'slug' => 'color'],
        ['name' => 'RAM', 'slug' => 'ram'],
        ['name' => 'Size', 'slug' => 'size'],
    ];

    public function run(): void
    {
        foreach ($this->properties as $property)
        {
            DB::table('properties')->insert($property);
        }
    }
}
