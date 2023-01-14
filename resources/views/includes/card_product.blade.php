<div class="single-product">
    @if ($product->is_new)
        <div class="label_new">
            <span class="new">new</span>
        </div>
    @endif
    @if ($product->isSale())
        <div class="sale-off">
            <span class="sale-percent">-{{ $product->discount }}%</span>
        </div>
    @endif
    <div class="product-img">
        <a href="{{ route('product.show', $product->slug) }}">
            @foreach ($product->images as $image)
                <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                        src="{{ Storage::url('products/'. $image->name) }}"
                            alt="{{ $product->name }}">
            @endforeach
        </a>
    </div>
    <div class="product-description">
        <h5><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a></h5>
        <div class="price-box">
            @if ($product->issetDiscount())
                <span class="price">{{ $product->getPriceWithDiscount() }}$</span>
                <span class="old-price">{{ $product->price / 100 }}$</span>
            @else
                <span class="price">{{ $product->price / 100 }}$</span>
            @endif
        </div>
        <span class="rating">
            @for ($i = 0; $i < $product->rate; $i++)
                <i class="fa fa-star"></i>
            @endfor
        </span>
    </div>
    @include('includes.product_action')
</div>

