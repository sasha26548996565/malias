<div class="product-action">
    <div class="button-group">
        <form class="product-button" action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button type="submit"><i class="fa fa-shopping-cart"></i>Add to
                Cart
            </button>
        </form>
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
