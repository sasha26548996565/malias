<div class="small-product-area carosel-navigation">
    <div class="row">
        <div class="col-md-12">
            <div class="area-title">
                <h3 class="title-group gfont-1">Bestseller</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="active-bestseller sidebar">
            <div class="col-xs-12">
                @foreach ($popularProducts as $product)
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ Storage::url('products/'. $product->preview) }}" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">{{ $product->name }}</a></h5>
                            <div class="price-box">
                                @if ($product->issetDiscount())
                                    <span class="price gfont-2">{{ $product->getPriceWithDiscount() }}$</span>
                                    <span class="old-price gfont-2">{{ $product->price / 100 }}$</span>
                                @else
                                    <span class="price gfont-2">{{ $product->price / 100 }}$</span>
                                @endif
                            </div>
                            <span class="rating">
                                @for ($i = 0; $i < $product->rate; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
