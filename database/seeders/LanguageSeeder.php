<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    private Language $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function run(): void
    {
        foreach ($this->language->getProperties() as $language)
        {
            DB::table('languages')->insert($language);
        }
    }
}
