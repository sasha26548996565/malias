<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_products', 'product_id', 'property_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'product_id', 'id');
    }

    public function isSale(): bool
    {
        return $this->discount >= 10;
    }

    public function scopeSale(Builder $builder): Builder
    {
        return $builder->where('discount', '>=', 10);
    }

    public function getPriceWithDiscount(): float
    {
        if ($this->discount == null)
            return $this->price / 100;

        $totalPriceInCent = $this->price * (100 - $this->discount) / 100;
        $totalPriceInWhole = $totalPriceInCent / 100;
        return $totalPriceInWhole;
    }

    public function issetDiscount(): bool
    {
        return $this->discount ? true : false;
    }
}
