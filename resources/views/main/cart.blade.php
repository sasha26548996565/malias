@extends('layouts.master')

@section('title', 'Cart')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- START SMALL-PRODUCT-AREA -->
                    @include('includes.bestsellers')
                    <!-- END SMALL-PRODUCT-AREA -->
                </div>
                <div class="col-md-9">
                    <!-- START PRODUCT-BANNER -->
                    <div class="product-banner">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="banner">
                                    <a href="#"><img src="img/banner/12.jpg" alt="Product Banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-BANNER -->
                    <!-- Start Shopping-Cart -->
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-title">
                                    <h2 class="entry-title">Shopping Cart</h2>
                                </div>
                                <!-- Start Table -->
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="text-center">Image</td>
                                                <td class="text-left">Product Name</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="{{ route('product.show', $product->attributes['slug']) }}">
                                                            <img class="img-thumbnail"
                                                                src="{{ Storage::url('products/'. $product->attributes['preview']) }}"
                                                                    alt="{{ $product->name }}" />
                                                        </a>
                                                    </td>
                                                    <td class="text-left">
                                                        <a href="{{ route('product.show', $product->attributes['slug']) }}">{{ $product->name }}</a>
                                                    </td>
                                                    <td class="text-left">
                                                        @if (session()->has('not_available'))
                                                            <div class="alert alert-danger">{{ session()->get('not_available') }}</div>
                                                        @endif
                                                        <form action="{{ route('cart.action', $product->id) }}" class="btn-block cart-put" method="POST">
                                                            @csrf
                                                            <input class="form-control" type="number" name="quantity" min="1" max="{{ $product->attributes['count'] }}"
                                                                placeholder="{{ $product->quantity }}" value="{{ $product->quantity }}" />
                                                            <div class="input-group-btn cart-buttons">
                                                                <button type="submit" name="action" value="update" class="btn btn-primary" data-toggle="tooltip" title="Update">
                                                                    <i class="fa fa-refresh"></i>
                                                                </button>
                                                                <button type="submit" name="action" value="remove" class="btn btn-danger" data-toggle="tooltip" title="Remove">
                                                                    <i class="fa fa-times-circle"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                    <td class="text-right">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</td>
                                                    <td class="text-right">{{ currency($product->getPriceSum() / 100, 'USD', currency()->getUserCurrency()) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Table -->
                                <h3 class="title-group-3 gfont-1">What would you like to do next?</h3>
                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                <!-- Accordion start -->
                                <div class="accordion-cart">
                                    <div class="panel-group" id="accordion">
                                        <!-- Start Coupon -->
                                        <div class="panel panel_default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#coupon">Use Coupon Code<i class="fa fa-caret-down"></i> </a>
                                                </h4>
                                            </div>
                                            <div id="coupon" class="collapse in">
                                                <form class="panel-body" action="{{ route('cart.setCoupon') }}" method="POST">
                                                    @csrf
                                                    <div class="col-sm-2">
                                                        <p>Enter your coupon here</p>
                                                    </div>
                                                    <div class="input-group">
                                                        <input class="form-control" name="coupon" type="text" required placeholder="Enter your coupon here" />
                                                        <button type="submit" class="btn btn-primary">Apply Coupon</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Coupon -->
                                    </div>
                                </div>
                                <!-- Accordion end -->
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-8">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right">
                                                        <strong>Total:</strong>
                                                    </td>
                                                    <td class="text-right">{{ currency($totalPrice / 100, 'USD', currency()->getUserCurrency()) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="shopping-checkout">
                                    <a href="#" class="btn btn-default pull-left">Continue Shopping</a>
                                    @auth
                                        <a href="{{ route('checkout.index') }}" class="btn btn-primary pull-right">Checkout</a>
                                    @else
                                        <a href="{{ route('login') }}" class="btn btn-primary pull-right">login please for checkout</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Shopping-Cart -->
                </div>
            </div>
        </div>
    </section>
@endsection
