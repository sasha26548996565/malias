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

    public function add(Request $request): JsonResponse|RedirectResponse
    {
        if (session('cartId') == null)
            session(['cartId' => uniqid()]);

        $product = Product::findOrFail($request->input('productId'));
        $cart = $this->cartService->add($product, session()->get('cartId'), (int) $request->input('quantity'));
        return response()->json($cart);
    }

    public function update(Request $request): JsonResponse
    {
        $cart = CartFacade::session(session()->get('cartId'));
        $product = Product::findOrFail($request->input('productId'));
        $quantity = (int) $request->input('quantity');

        if ($product->checkAvailable($quantity))
            $cart = $this->cartService->update($product->id, $cart, $quantity);
        else
            session()->flash('not_available', 'product not available in count'. $quantity);

        return response()->json($cart);
    }

    public function remove(Request $request): JsonResponse|RedirectResponse
    {
        $cart = CartFacade::session(session()->get('cartId'));
        $product = Product::findOrFail($request->input('productId'));

        $countCart = $this->cartService->remove($product->id, $cart);

        return response()->json(['status' => true, 'countCart' => $countCart]);
    }
}
