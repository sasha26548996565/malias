<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderService
{
    public function getPivotRow(Order $order, int $productId): Pivot
    {
        return $order->products()->where('product_id', $productId)->first()->pivot;
    }

    public function updatePivotCount(Pivot $pivotRow, int $quantity): void
    {
        $pivotRow->count = $quantity;
        $pivotRow->update();
    }

    public function updateProductCount(Product $product, int $quantity): void
    {
        $product->count -= $quantity;
        $product->update();
    }

    public function attachProducts(Order $order, int $productId): void
    {
        $order->products()->attach($productId);
    }

    public function associateCoupon(Order $order, int $couponId): void
    {
        $order->promoCode()->associate($couponId)->save();
    }
}
