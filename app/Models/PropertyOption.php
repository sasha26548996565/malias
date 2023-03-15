<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyOption extends Model
{
    use HasFactory;

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
