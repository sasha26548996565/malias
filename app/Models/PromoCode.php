<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromoCode extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'promo_code_id', 'id');
    }
}
