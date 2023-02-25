@extends('layouts.master')

@section('title', $product->name)

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- START SMALL-PRODUCT-AREA -->
                    @include('includes.bestsellers')
                    <!-- END SMALL-PRODUCT-AREA -->
                    <!-- START SIDEBAR-BANNER -->
                    <!-- END SIDEBAR-BANNER -->
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!-- Start Toch-Prond-Area -->
                    <div class="toch-prond-area">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="clear"></div>
                                <div class="tab-content">
                                    <!-- Product = display-1-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-photo">
                                                    <a href="#"><img src="{{ Storage::url('products/'. $product->preview) }}" data-imagezoom="true" alt="#" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($product->images as $image)
                                        <div role="tabpanel" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-photo">
                                                        <a href="#"><img src="{{ Storage::url('products/'. $image->name) }}" data-imagezoom="true" alt="#" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- End Product = display-1-4 -->
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <h2 class="title-product">{{ $product->name }}</h2>
                                <div class="about-toch-prond">
                                    <p>
                                        <span class="rating">
                                            @for ($i = 0; $i < $product->rate; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </span>
                                    </p>
                                    <hr />
                                    <p class="short-description">{{ $product->description }}</p>
                                    <hr />
                                    @if ($product->properties->count() > 0)
                                        @foreach ($product->properties as $property)
                                            <span>{{ $property->name }}</span> -
                                            <span>{{ $property->pivot->value }}</span><hr />
                                        @endforeach
                                    @endif
                                    <span class="current-price">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</span>
                                    <span class="item-stock">Availability:
                                        <span class="text-stock">{{ $product->isAvailable() ? "In stock" : "not in stock" }}</span>
                                    </span>
                                </div>
                                <div class="about-product">
                                    @foreach ($options as $option => $values)
                                        <div class="product-select product-color">
                                            <label><sup>*</sup>{{ $option }}</label>
                                            <select name="" class="form-control">
                                                <option> --- Please Select --- </option>
                                                @foreach ($values as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="product-quantity">
                                    @if ($product->checkAvailable(count_product_in_cart(session()->get('cartId'), $product->id)))
                                        <span>Qty</span>
                                        <input type="number" name="quantity" class="quantityy"
                                            placeholder="1" min="1" max="{{ $product->count - count_product_in_cart(session()->get('cartId'), $product->id) }}" />
                                        <button type="submit" data-id="{{ $product->id }}" class="toch-button toch-add-cart add-cart">Add to Cart</button>
                                    @endif
                                    <button type="submit" class="toch-button toch-wishlist">wishlist</button>
                                    <button type="submit" class="toch-button toch-compare">Compare</button>
                                    <hr />
                                </div>
                            </div>
                        </div>
                        <!-- Start Toch-Box -->
                        <div class="toch-box">
                            <div class="row">
                                <div class="col-xs-12">
                                    <!-- Start Toch-Menu -->
                                    <div class="toch-menu">
                                        <ul role="tablist">
                                            <li role="presentation" class=" active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (
                                                {{ $product->reviews->count() }})</a></li>
                                        </ul>
                                    </div>
                                    <!-- End Toch-Menu -->
                                    <div class="tab-content toch-description-review">
                                        <!-- Start display-description -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="description">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-description">
                                                        <p>Make review</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End display-description -->
                                        <!-- Start display-reviews -->
                                        <div role="tabpanel" class="tab-pane fade" id="reviews">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="toch-reviews">
                                                        <div class="toch-table">
                                                            <table class="table table-striped table-bordered">
                                                                @foreach ($product->reviews as $review)
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>{{ $review->user->name }}</strong></td>
                                                                            <td class="text-right">
                                                                                <strong>{{ $review->created_at->format('Y:m:d H:i:s') }}</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>{{ $review->text }}</p>
                                                                                @for ($i = 0; $i < $review->rate; $i++)
                                                                                    <span><i class="fa fa-star"></i></span>
                                                                                @endfor
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                        <div class="toch-review-title">
                                                            <h2>Write a review</h2>
                                                        </div>
                                                        <form action="{{ route('review', $product->id) }}" method="POST">
                                                            @csrf
                                                            @auth
                                                                <div class="review-message">
                                                                    <div class="col-xs-12">
                                                                        <p><sup>*</sup>Your Name <br>
                                                                            <textarea name="text" required class="form-control">{{ old('text') }}</textarea>
                                                                        </p>
                                                                    </div>
                                                                    <div class="help-block">
                                                                        <span class="note">Note:</span>
                                                                            HTML is not translated!
                                                                    </div>
                                                                    <div class="get-rating">
                                                                        <span><sup>*</sup>Rating </span>
                                                                        Bad
                                                                        <input type="radio" value="1" name="rate" />
                                                                        <input type="radio" value="2" name="rate" />
                                                                        <input type="radio" value="3" name="rate" />
                                                                        <input type="radio" value="4" name="rate" />
                                                                        <input type="radio" value="5" name="rate" />
                                                                        Good
                                                                    </div>
                                                                    <div class="buttons clearfix">
                                                                        <button type="submit" class="btn btn-primary pull-right">Continue</button>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                please login
                                                            @endauth
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-reviews -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Toch-Box -->
                        <!-- START PRODUCT-AREA -->
                        <div class="product-area">
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <!-- Start Product-Menu -->
                                    <div class="product-menu">
                                        <div class="product-title">
                                            <h3 class="title-group-2 gfont-1">Related Products</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                            <!-- Start Product -->
                            <div class="product carosel-navigation">
                                <div class="row">
                                    <div class="active-product-carosel">
                                        @foreach ($relatedProducts as $product)
                                            <div class="col-xs-12">
                                                @include('includes.card_product', $product)
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <!-- End Product -->
                        </div>
                        <!-- END PRODUCT-AREA -->
                    </div>
                    <!-- End Toch-Prond-Area -->
                </div>
            </div>
        <!-- END SUBSCRIBE-AREA -->
    </section>
@endsection
