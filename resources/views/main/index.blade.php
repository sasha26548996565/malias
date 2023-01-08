@extends('layouts.master')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <!-- START HOT-DEALS-AREA -->
                    <div class="hot-deals-area carosel-circle">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="area-title">
                                    <h3 class="title-group border-red gfont-1">{{ __('index.hot_deals') }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-hot-deals">
                                <!-- Start Single-hot-deals -->
                                @foreach ($hotDealProducts as $product)
                                    <div class="col-xs-12">
                                        <div class="single-hot-deals">
                                            <div class="hot-deals-photo">
                                                <a href="#"><img src="{{ Storage::url('products/'. $product->preview) }}" alt="{{ $product->name }}"></a>
                                            </div>
                                            <div class="hot-deals-text">
                                                <h5><a href="#" class="name-group">{{ $product->name }}</a></h5>
                                                <span class="rating">
                                                    @for ($i = 0; $i < $product->rate; $i++)
                                                        <i class="fa fa-star"></i>
                                                    @endfor
                                                </span>
                                                <div class="price-box">
                                                    @if ($product->issetDiscount())
                                                        <span class="price gfont-2">{{ $product->getPriceWithDiscount() }}$</span>
                                                        <span class="old-price gfont-2">{{ $product->price / 100 }}$</span>
                                                    @else
                                                        <span class="price gfont-2">{{ $product->price / 100 }}$</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End Single-hot-deals -->
                            </div>
                        </div>
                    </div>
                    <!-- END HOT-DEALS-AREA -->
                    <!-- START SMALL-PRODUCT-AREA -->
                    @include('includes.bestsellers')

                    @include('includes.recent_products')
                    <!-- END RECENT-POSTS -->
                </div>
                <div class="col-md-9 col-sm-9">
                    <!-- START PRODUCT-AREA (1) -->
                    @foreach ($newestCategories as $category)
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">{{ $category->name }}</h3>
                                        </div>

                                        <ul role="tablist">
                                            @foreach ($categories->where('parentId', $category->id) as $childCategory)
                                            <li role="presentation" class=" active"><a href="#display-1-1" role="tab"
                                                    data-toggle="tab">{{ $childCategory->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                            <!-- Start Product -->
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="product carosel-navigation">
                                        <div class="tab-content">
                                            <!-- Product = display-1-1 -->
                                            <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        @foreach ($category->products as $product)
                                                            <div class="col-xs-12">
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
                                                                        <a href="#">
                                                                            @foreach ($product->images as $image)
                                                                                <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                        src="{{ Storage::url('products/'. $image->name) }}"
                                                                                            alt="{{ $product->name }}">
                                                                            @endforeach
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><a href="#">{{ $product->name }}</a></h5>
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
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button><i class="fa fa-shopping-cart"></i> Add to
                                                                                    Cart</button>
                                                                            </div>
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
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-1 -->
                                            <!-- Start Product = display-1-2 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-1-2">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        @foreach ($category->products as $product)
                                                            <div class="col-xs-12">
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
                                                                        <a href="#">
                                                                            @foreach ($product->images as $image)
                                                                                <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                        src="{{ Storage::url('products/'. $image->name) }}"
                                                                                            alt="{{ $product->name }}">
                                                                            @endforeach
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><a href="#">{{ $product->name }}</a></h5>
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
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button><i class="fa fa-shopping-cart"></i> Add to
                                                                                    Cart</button>
                                                                            </div>
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
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-2 -->
                                            <!-- Start Product = di3play-1-1 -->
                                            <div role="tabpanel" class="tab-pane fade" id="display-1-3">
                                                <div class="row">
                                                    <div class="active-product-carosel">
                                                        <!-- Start Single-Product -->
                                                        @foreach ($category->products as $product)
                                                            <div class="col-xs-12">
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
                                                                        <a href="#">
                                                                            @foreach ($product->images as $image)
                                                                                <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                        src="{{ Storage::url('products/'. $image->name) }}"
                                                                                            alt="{{ $product->name }}">
                                                                            @endforeach
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><a href="#">{{ $product->name }}</a></h5>
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
                                                                    <div class="product-action">
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <button><i class="fa fa-shopping-cart"></i> Add to
                                                                                    Cart</button>
                                                                            </div>
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
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <!-- End Single-Product -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product = display-1-3 -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    @endforeach
                    <!-- END PRODUCT-AREA (3) -->
                    <!-- START  -->
                    <!-- START SMALL-PRODUCT-AREA (1) -->
                    <div class="small-product-area">
                        <!-- Start Product-Menu -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product-menu">
                                    <ul role="tablist">
                                        <li role="presentation" class=" active"><a href="#display-4-1"
                                                role="tab" data-toggle="tab">Latest</a></li>
                                        <li role="presentation"><a href="#display-4-2" role="tab"
                                                data-toggle="tab">Sale</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Product = display-4-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-4-1">
                                            <div class="row">
                                                <div class="active-small-product">
                                                    <!-- Start Single-Product -->
                                                    @foreach ($newestProducts as $product)
                                                        <div class="col-xs-12">
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
                                                                    <a href="#">
                                                                        @foreach ($product->images as $image)
                                                                            <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                    src="{{ Storage::url('products/'. $image->name) }}"
                                                                                        alt="{{ $product->name }}">
                                                                        @endforeach
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">{{ $product->name }}</a></h5>
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
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add to
                                                                                Cart</button>
                                                                        </div>
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
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-4-1 -->
                                        <!-- Start Product = display-4-2 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-4-2">
                                            <div class="row">
                                                <div class="active-small-product">
                                                    <!-- Start Single-Product -->
                                                    @foreach ($saleProducts as $product)
                                                        <div class="col-xs-12">
                                                            <div class="single-product">
                                                                @if ($product->is_new)
                                                                    <div class="label_new">
                                                                        <span class="new">new</span>
                                                                    </div>
                                                                @endif
                                                                <div class="sale-off">
                                                                    <span class="sale-percent">-{{ $product->discount }}%</span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        @foreach ($product->images as $image)
                                                                            <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                    src="{{ Storage::url('products/'. $image->name) }}"
                                                                                        alt="{{ $product->name }}">
                                                                        @endforeach
                                                                    </a>
                                                                </div>
                                                                <div class="product-description">
                                                                    <h5><a href="#">{{ $product->name }}</a></h5>
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
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add to
                                                                                Cart</button>
                                                                        </div>
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
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-4-2 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <!-- END SMALL-PRODUCT-AREA (1) -->
                </div>
            </div>
        </div>
        <!-- START BRAND-LOGO-AREA -->
        <div class="brand-logo-area carosel-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-brand-logo">
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/6.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BRAND-LOGO-AREA -->
    </section>
@endsection
