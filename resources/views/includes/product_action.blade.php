<div class="product-action">
    <div class="button-group">
        @if ($product->checkAvailable(count_product_in_cart(session()->get('cartId'), $product->id)))
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
