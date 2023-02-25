<?php

declare(strict_types=1);

use \Darryldecode\Cart\Facades\CartFacade;

if (! function_exists('count_product_in_cart'))
{
    function count_product_in_cart(?string $sessionKey, int $productId): int
    {
        if (is_null($sessionKey))
            return 0;

        $cart = CartFacade::session($sessionKey)->getContent($productId);
        $productInCart = $cart->get($productId);

        if (is_null($productInCart))
            return 0;

        return $productInCart->quantity;
    }
}
