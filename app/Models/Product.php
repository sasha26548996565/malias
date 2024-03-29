<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Laravel\Scout\Searchable;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory, SoftDeletes, Filterable, Searchable;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_products', 'product_id', 'property_id');
    }

    public function propertyOption(): BelongsToMany
    {
        return $this->belongsToMany(PropertyOption::class, 'product_property_option', 'product_id', 'property_option_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'product_id', 'id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'product_id', 'id');
    }

    public function scopeSale(Builder $builder): Builder
    {
        return $builder->where('discount', '>=', 10);
    }

    public function isSale(): bool
    {
        return $this->discount >= 10;
    }

    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
        ];
    }

    public function wasPublishedRecently(): bool
    {
        return Carbon::now()->lte($this->created_at->addDays(5));
    }

    public function disableIsNew(): void
    {
        $this->is_new = 0;
        $this->save();
    }

    public function getPriceWithDiscount(): string
    {
        if ($this->discount == null)
            return currency($this->price / 100, 'USD', currency()->getUserCurrency());

        $price = currency($this->price / 100, 'USD', currency()->getUserCurrency(), false) * (100 - $this->discount) / 100;
        $totalPrice = currency($price, 'USD', currency()->getUserCurrency());
        return $totalPrice;
    }

    public function issetDiscount(): bool
    {
        return $this->discount ? true : false;
    }

    public function isAvailable(): bool
    {
        return $this->count > 0;
    }

    public function checkAvailable(int $quantity): bool
    {
        return $this->count >= $quantity;
    }
}
