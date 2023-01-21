<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    private array $properties = [
        ['name' => 'Color'],
        ['name' => 'RAM'],
        ['name' => 'Size'],
    ];

    public function run(): void
    {
        foreach ($this->properties as $property)
        {
            DB::table('properties')->insert($property);
        }
    }
}
