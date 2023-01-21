<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;


class CartService
{
    public function add(Product $product, string $cartId, int $quantity): void
    {
        CartFacade::session($cartId)->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'attributes' => [
                'slug' => $product->slug,
                'preview' => $product->preview,
                'count' => $product->count,
            ],
            'associatedModel' => $product,
        ]);
    }

    public function update(int $productId, Cart $cart, int $quantity): void
    {
        $cart->update($productId, ['quantity' => ['relative' => false, 'value' => $quantity]]);
    }

    public function remove(int $productId, Cart $cart): void
    {
        $cart->remove($productId);
    }

    public function clear(Cart $cart): void
    {
        $cart->clear();
    }
}
