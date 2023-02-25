<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = [];
    private array $properties = [
        ['slug' => 'ru', 'image' => 'img/flags/ru.jpg'],
        ['slug' => 'en', 'image' => 'img/flags/gb.png'],
    ];

    public function getProperties(): array
    {
        return $this->properties;
    }

}
