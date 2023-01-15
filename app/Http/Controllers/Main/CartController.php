<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Requests\Cart\StoreRequest;
use Darryldecode\Cart\Facades\CartFacade;
use App\Http\Requests\Main\Cart\ActionRequest;

class CartController extends Controller
{
    public function index(): View
    {
        $cart = CartFacade::session(session()->get('cartId'))->getContent();
        return view('main.cart', compact('cart'));
    }

    public function add(Product $product, int $quantity = 1): RedirectResponse
    {
        if (session('cartId') == null)
            session(['cartId' => uniqid()]);

        CartFacade::session(session()->get('cartId'))->add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity,
            'attributes' => [
                'slug' => $product->slug,
                'preview' => $product->preview,
                'count' => $product->count,
            ],
        ]);

        return to_route('cart.index');
    }

    public function action(ActionRequest $request, Product $product): RedirectResponse
    {
        $params = $request->validated();
        $cart = CartFacade::session(session()->get('cartId'));
        switch ($params['action'])
        {
            case 'update':
                if ($product->checkAvailable((int) $params['quantity']))
                    $cart->update($product->id, ['quantity' => ['relative' => false, 'value' => $params['quantity']]]);
                else
                    session()->flash('not_available', 'product not available in count'. $params['quantity']);
                break;
            case 'remove':
                $cart->remove($product->id);
                break;
        }

        return to_route('cart.index');
    }
}
