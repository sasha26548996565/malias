<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    private array $properties = [
        ['slug' => 'ru'],
        ['slug' => 'en'],
    ];

    public function getProperties(): array
    {
        return $this->properties;
    }

    protected $guarded = [];
}
