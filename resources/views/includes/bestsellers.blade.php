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
                    @include('includes.card_product', $product)
                @endforeach
            </div>
        </div>
    </div>
</div>
