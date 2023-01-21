<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Darryldecode\Cart\Facades\CartFacade;
use App\Http\Requests\Main\Cart\CouponRequest;
use App\Models\PromoCode;
use Darryldecode\Cart\CartCondition;

class CouponController extends Controller
{
    public function setCoupon(CouponRequest $request): RedirectResponse
    {
        $coupon = PromoCode::where('name', $request->validated()['coupon'])->first();
        $cart = CartFacade::session(session()->get('cartId'));
        $couponCondition = new CartCondition([
            'name' => 'coupon',
            'type' => 'coupon',
            'value' => '-'. $coupon->discount .'%',
            'target' => 'subtotal',
            'attributes' => [
                'couponId' => $coupon->id,
            ],
        ]);
        $cart->condition($couponCondition);
        return to_route('cart.index');
    }
}
