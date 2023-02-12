<?php

declare(strict_types=1);

namespace App\Http\Controllers\Main;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Barryvdh\Debugbar\Facades\Debugbar;
use Darryldecode\Cart\Facades\CartFacade;
use App\Http\Requests\Main\Cart\ActionRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class CartController extends Controller
{
    public function __construct(private CartService $cartService)
    {}

    public function index(): View
    {
        $cart = CartFacade::session(session()->get('cartId'));
        $products = $cart->getContent();
        $totalPrice = $cart->getSubTotal();

        return view('main.cart', compact('products', 'totalPrice'));
    }

    public function add(Request $request): JsonResponse
    {
        if (session('cartId') == null)
            session(['cartId' => uniqid()]);

        $product = Product::findOrFail($request->input('productId'));
        $cart = $this->cartService->add($product, session()->get('cartId'), (int) $request->input('quantity'));
        return response()->json($cart);
    }

    public function action(ActionRequest $request, Product $product): RedirectResponse
    {
        $params = $request->validated();
        $cart = CartFacade::session(session()->get('cartId'));
        switch ($params['action'])
        {
            case 'update':
                if ($product->checkAvailable((int) $params['quantity']))
                    $this->cartService->update($product->id, $cart, (int) $params['quantity']);
                else
                    session()->flash('not_available', 'product not available in count'. $params['quantity']);
                break;
            case 'remove':
                $this->cartService->remove($product->id, $cart);
                if ($cart->getContent()->count() <= 0)
                    return to_route('index');
                break;
        }

        return to_route('cart.index');
    }
}
