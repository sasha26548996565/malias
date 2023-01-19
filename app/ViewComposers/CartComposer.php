<?php

declare(strict_types=1);

namespace App\ViewComposers;

use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Contracts\View\View;

class CartComposer implements ComposerContract
{
    public function compose(View $view): View
    {
        $cart = null;
        $cartId = session()->get('cartId');
        if ($cartId != null)
            $cart = CartFacade::session($cartId);

        return $view->with('cart', $cart);
    }
}
