<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Events\OrderShipped;
use App\Models\Order;
use App\Models\Region;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Darryldecode\Cart\Facades\CartFacade;
use App\Http\Requests\Main\CheckoutRequest;
use App\Models\PromoCode;

class CheckoutController extends Controller
{
    public function index(): View
    {
        $cart = CartFacade::session(session()->get('cartId'));
        $regions = Region::orderBy('name')->get();
        $countries = Country::orderBy('name')->get();
        return view('main.checkout', compact('cart', 'regions', 'countries'));
    }

    public function confirm(CheckoutRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $cart = CartFacade::session(session()->get('cartId'));
        $items = $cart->getContent();
        $order = Order::create(array_merge($request->validated(), [
            'first_name' => $user->name,
            'last_name' => $user->last_name,
            'email' => $user->email,
        ]));

        $couponCondition = $cart->getCondition('coupon');
        if ($couponCondition != null)
        {
            $order->promoCode()->associate($couponCondition->getAttributes('couponId')['couponId'])->save();
        }

        foreach ($items as $item)
        {
            $product = Product::findOrFail($item->associatedModel->id);
            $order->products()->attach($product->id);
            $pivotRow = $order->products()->where('product_id', $product->id)->first()->pivot;
            $pivotRow->count = $item->quantity;
            $pivotRow->update();
            $product->count -= $item->quantity;
            $product->update();
        }

        $cart->clear();

        event(new OrderShipped($order));

        return to_route('index');
    }
}
