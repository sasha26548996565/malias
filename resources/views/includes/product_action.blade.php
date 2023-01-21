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
            <form class="product-button" action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit"><i class="fa fa-shopping-cart"></i>Add to
                    Cart
                </button>
            </form>
        @endif
        <div class="product-button-2">
            <a href="#" data-toggle="tooltip"
                title="Wishlist"><i
                    class="fa fa-heart-o"></i></a>
            <a href="#" data-toggle="tooltip"
                title="Compare"><i
                    class="fa fa-signal"></i></a>
            <a href="#" class="modal-view"
                data-toggle="modal"
                data-target="#productModal"><i
                    class="fa fa-search-plus"></i></a>
        </div>
    </div>
</div>
