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
                                    <h3 class="title-group border-red gfont-1">Hot Deals</h3>
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
                                            {{-- <div class="count-down">
                                                <div class="timer">
                                                    <div data-countdown="2017/12/31"></div>
                                                </div>
                                            </div> --}}
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
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Electronic</h3>
                                    </div>

                                    <ul role="tablist">
                                        <li role="presentation" class=" active"><a href="#display-1-1" role="tab"
                                                data-toggle="tab">Speaker</a></li>
                                        <li role="presentation"><a href="#display-1-2" role="tab"
                                                data-toggle="tab">TV</a></li>
                                        <li role="presentation"><a href="#display-1-3" role="tab"
                                                data-toggle="tab">Mobile</a></li>
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
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/12.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/12bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
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
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/12bg.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/12.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i> Add
                                                                                to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                    <!-- END PRODUCT-AREA (1) -->
                    <!-- START PRODUCT-AREA (2) -->
                    <div class="product-area">
                        <!-- Start Product-Menu -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product-menu  border-red">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Computer</h3>
                                    </div>

                                    <ul role="tablist">
                                        <li role="presentation" class=" active"><a href="#display-2-1"
                                                role="tab" data-toggle="tab">Dell</a></li>
                                        <li role="presentation"><a href="#display-2-2" role="tab"
                                                data-toggle="tab">Hp</a></li>
                                        <li role="presentation"><a href="#display-2-3" role="tab"
                                                data-toggle="tab">Apple</a></li>
                                        <li role="presentation"><a href="#display-2-4" role="tab"
                                                data-toggle="tab">Sony</a></li>
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
                                        <!-- Start Product = display-2-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-35%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-45%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-2-1 -->
                                        <!-- Start Product = display-2-2 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-2-2">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-2-2 -->
                                        <!-- Start Product = display-2-3 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-2-3">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-2-3 -->
                                        <!-- Start Product = display-2-4 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-2-4">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/13.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/10bg.jpg"
                                                                        alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-2-4 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <!-- END PRODUCT-AREA (2) -->
                    <!-- START PRODUCT-AREA (3) -->
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-2 gfont-1">Smart Phone</h3>
                                    </div>

                                    <ul role="tablist">
                                        <li role="presentation" class=" active"><a href="#display-3-1"
                                                role="tab" data-toggle="tab">Sony</a></li>
                                        <li role="presentation"><a href="#display-3-2" role="tab"
                                                data-toggle="tab">Apple</a></li>
                                        <li role="presentation"><a href="#display-3-3" role="tab"
                                                data-toggle="tab">Samsung</a></li>
                                        <li role="presentation"><a href="#display-3-4" role="tab"
                                                data-toggle="tab">Nokia</a></li>
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
                                        <!-- Start Product = display-3-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-35%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-45%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-3-1 -->
                                        <!-- Start Product = display-3-2 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-3-2">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-3-2 -->
                                        <!-- Start Product = display-3-3 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-3-3">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-3-3 -->
                                        <!-- Start Product = display-3-4 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-3-4">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-55%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/1.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/1bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new">new</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/2.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/2bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/3.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/4.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-20%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/5.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/3bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="sale-off">
                                                                <span class="sale-percent">-25%</span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/mediam/6.jpg" alt="Product">
                                                                    <img class="secondary-img"
                                                                        src="img/product/mediam/4bg.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <button><i class="fa fa-shopping-cart"></i>
                                                                                Add to Cart</button>
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
                                                                                data-target="#productModal"
                                                                                title="Quickview"><i
                                                                                    class="fa fa-search-plus"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-3-4 -->
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-AREA (3) -->
                    <!-- START PRODUCT-BANNER -->
                    <div class="product-banner">
                        <div class="row">
                            <div class="col-md-7 banner-box1">
                                <div class="single-product-banner">
                                    <a href="#"><img src="img/banner/5.jpg" alt="Product Banner"></a>
                                    <div class="banner-text banner-1">
                                        <h2>ApBle 4s</h2>
                                        <p>Vibrant colors beautifully designed</p>
                                        <span>$888.66</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 banner-box2">
                                <div class="single-product-banner">
                                    <a href="#"><img src="img/banner/6.jpg" alt="Product Banner"></a>
                                    <div class="banner-text banner-2">
                                        <h2>Htc <span>N8.</span></h2>
                                        <p>lumina n85</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-BANNER -->
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
                                        <li role="presentation"><a href="#display-4-3" role="tab"
                                                data-toggle="tab">Random</a></li>
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
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="product-button-2">
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Add Cart"><i
                                                                                class="fa fa-shopping-cart"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Wishlist"><i
                                                                                class="fa fa-heart-o"></i></a>
                                                                        <a href="#" data-toggle="tooltip"
                                                                            title="Compare"><i
                                                                                class="fa fa-signal"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-4-1 -->
                                        <!-- Start Product = display-4-2 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-4-2">
                                            <div class="row">
                                                <div class="active-small-product">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-4-2 -->
                                        <!-- Start Product = display-4-3 -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-4-3">
                                            <div class="row">
                                                <div class="active-small-product">
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$105.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                    <!-- Start Single-Product -->
                                                    <div class="col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/1.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Trid Palm</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$99.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/5.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Established Fact</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$85.00</span>
                                                                    <span class="old-price">$110.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="#">
                                                                    <img class="primary-img"
                                                                        src="img/product/small/3.jpg" alt="Product">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="#">Various Versions</a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">$90.00</span>
                                                                    <span class="old-price">$120.00</span>
                                                                </div>
                                                                <span class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </span>
                                                                <div class="product-action">
                                                                    <div class="button-group">
                                                                        <div class="product-button-2">
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Add Cart"><i
                                                                                    class="fa fa-shopping-cart"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Wishlist"><i
                                                                                    class="fa fa-heart-o"></i></a>
                                                                            <a href="#" data-toggle="tooltip"
                                                                                title="Compare"><i
                                                                                    class="fa fa-signal"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-4-3 -->
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
        <!-- START SUBSCRIBE-AREA -->
        <div class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                        <div class="subscribe">
                            <form action="#">
                                <input type="text" placeholder="Enter Your E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="social-media">
                            <a href="#"><i class="fa fa-facebook fb"></i></a>
                            <a href="#"><i class="fa fa-google-plus gp"></i></a>
                            <a href="#"><i class="fa fa-twitter tt"></i></a>
                            <a href="#"><i class="fa fa-youtube yt"></i></a>
                            <a href="#"><i class="fa fa-linkedin li"></i></a>
                            <a href="#"><i class="fa fa-rss rs"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SUBSCRIBE-AREA -->
    </section>
    <!-- END HOME-PAGE-CONTENT -->

    @include('includes.footer')

    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="#" src="img/product/quickview-photo.jpg" />
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        <span class="new-price">$160.00</span>
                                        <span class="old-price">$190.00</span>
                                    </div>
                                    <hr />
                                </div>
                                <a href="shop.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                    tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#"
                                                    class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#"
                                                    class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#"
                                                    class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a target="_blank" title="Google +" href="#"
                                                    class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#"
                                                    class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
@endsection
