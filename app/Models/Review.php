<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    protected static function boot(): void
    {
        parent::boot();

        static::saving(function ($review) {
            $review->user_id = Auth::user()->id;
        });

        static::saved(function ($review) {
            $product = $review->product;
            $sumReviews = $product->reviews->sum('rate') + $review->rate;
            $product->rate = $sumReviews / $product->reviews->count();
            $product->update();
        });
    }
}
