@extends('layouts.master')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- START PRODUCT-AREA (1) -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                        <div class="row">
                                            <div class="active-product-carosel">
                                                <!-- Start Single-Product -->
                                                @foreach ($products as $product)
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
                                                                <a href="{{ route('product.show') }}">
                                                                    @foreach ($product->images as $image)
                                                                        <img class="{{ $loop->first ? 'primary-img' : 'secondary-img' }}"
                                                                                src="{{ Storage::url('products/'. $image->name) }}"
                                                                                    alt="{{ $product->name }}">
                                                                    @endforeach
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="{{ route('product.show') }}">{{ $product->name }}</a></h5>
                                                                <div class="price-box">
                                                                    @if ($product->issetDiscount())
                                                                        <span class="price">{{ $product->getPriceWithDiscount() }}$</span>
                                                                        <span class="old-price">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</span>
                                                                    @else
                                                                        <span class="price">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</span>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
