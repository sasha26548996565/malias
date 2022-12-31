<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    private array $currencies = [
        ['name' => 'USD', 'symbol' => '$', 'rate' => 1],
        ['name' => 'RUB', 'symbol' => '₽', 'rate' => 75],
        ['name' => 'EUR', 'symbol' => '€', 'rate' => 0.94],
    ];

    public function run(): void
    {
        foreach ($this->currencies as $currency)
        {
            DB::table('currencies')->insert($currency);
        }
    }
}
