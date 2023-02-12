<div class="product-action">
    <div class="button-group">
        @php
            $quantity = 1;

            if (! is_null(session()->get('cartId')))
            {
                $cart = \Darryldecode\Cart\Facades\CartFacade::session(session()->get('cartId'))->getContent($product->id);
                $productInCart = $cart->get($product->id);
                if (! is_null($productInCart))
                {
                    $quantityProductInCart = $productInCart->quantity;
                    $quantity += $quantityProductInCart;
                }
            }
        @endphp
        @if ($product->checkAvailable($quantity))
            <div class="product-button">
                <button class="add-cart" data-id="{{ $product->id }}"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
            </div>
        @endif
        <div class="product-button-2">
            @auth
                <form action="{{ route('wishlist.toggleProduct', $product->id) }}" method="POST">
                    @csrf
                    <button type="submit" data-toggle="tooltip"
                        title="Wishlist"><i
                        @if (auth()->user()->hasLike($product->id))
                            class="fa fa-heart"
                        @else
                            class="fa fa-heart-o"
                        @endif
                        ></i></button>
                </form>
            @endauth
        </div>
    </div>
</div>
