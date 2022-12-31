<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id')->withPivot('count');
    }

    public function promoCode(): HasMany
    {
        return $this->hasMany(PromoCode::class, 'order_id', 'id');
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }

    public function getPopularProducts(): Collection
    {
        $productsIds = Order::get()->map->products->flatten()->map->pivot->mapTogroups( function ($pivot) {
            return [$pivot->product_id => $pivot->count];
        })->map->sum()->sortDesc()->take(3)->keys()->toArray();

        $products = Product::whereIn('id', $productsIds)->latest()->get();
        return $products;
    }
}
