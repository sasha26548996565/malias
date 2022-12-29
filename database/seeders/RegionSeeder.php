<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    private array $regions = [
        ['name' => 'Kalifornia'],
        ['name' => 'Novosibirsk'],
        ['name' => 'Berlin'],
    ];

    public function run(): void
    {
        foreach ($this->regions as $region)
        {
            DB::table('regions')->insert($region);
        }
    }
}
