<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Order;
use App\Models\Product;
use App\Models\PromoCode;
use Darryldecode\Cart\Cart;
use App\Services\CartService;
use App\Services\OrderService;
use Barryvdh\Debugbar\Facades\Debugbar;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderObserver
{
    private CartService $cartService;
    private OrderService $orderService;
    private Cart $cart;

    public function __construct(CartService $cartService, OrderService $orderService)
    {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
        $this->cart = CartFacade::session(session()->get('cartId'));
    }

    public function created(Order $order): void
    {
        foreach ($this->cart->getContent() as $cartItem)
        {
            $product = Product::findOrFail($cartItem->associatedModel->id);
            $this->orderService->attachProducts($order, $product->id);

            $pivotRow = $this->orderService->getPivotRow($order, $product->id);
            $this->orderService->updatePivotCount($pivotRow, $cartItem->quantity);
            $this->orderService->updateProductCount($product, $cartItem->quantity);
        }

        $couponCondition = $this->cart->getCondition('coupon');
        if ($couponCondition != null)
            $this->orderService->associateCoupon($order, $couponCondition->getAttributes('couponId')['couponId']);

        $this->cartService->clear($this->cart);
    }
}
