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
                                                <td class="text-left">Model</td>
                                                <td class="text-left">Quantity</td>
                                                <td class="text-right">Unit Price</td>
                                                <td class="text-right">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart as $product)
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
                                                        <form action="{{ route('cart.action', $product->id) }}" class="btn-block cart-put" method="POST">
                                                            @csrf
                                                            <input class="form-control" type="number" name="quantity" min="-{{ $product->quantity - 1 }}"
                                                                placeholder="{{ $product->quantity }}" />
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
                                                    <td class="text-right">{{ $product->quantity }}</td>
                                                    <td class="text-right">{{ $product->price }}$</td>
                                                    <td class="text-right">{{ $product->getPriceSum() / 100 }}$</td>
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
                                                <div class="panel-body">
                                                    <div class="col-sm-2">
                                                        <p>Enter your coupon here</p>
                                                    </div>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" placeholder="Enter your coupon here" />
                                                        <button type="submit" class="btn btn-primary">Apply Coupon</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Coupon -->
                                        <!-- Start Voucher -->
                                        <div class="panel panel_default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#voucher">Use Gift Voucher <i class="fa fa-caret-down"></i> </a>
                                                </h4>
                                            </div>
                                            <div id="voucher" class="collapse">
                                                <div class="panel-body">
                                                    <div class="col-sm-2">
                                                        <p>Enter your gift voucher code here</p>
                                                    </div>
                                                    <div class="input-group">
                                                        <input class="form-control" type="text" placeholder="Enter your gift voucher code here" />
                                                        <button type="submit" class="btn btn-primary">Apply Voucher</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Voucher -->
                                        <!-- Start Shipping -->
                                        <div class="panel panel_default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-trigger collapsed" data-toggle="collapse" data-parent="#accordion" href="#shipping">Estimate Shipping & Taxes <i class="fa fa-caret-down"></i> </a>
                                                </h4>
                                            </div>
                                            <div id="shipping" class="collapse">
                                                <div class="panel-body">
                                                    <div class="col-sm-12">
                                                        <p>Enter your destination to get a shipping estimate.</p>
                                                    </div>
                                                    <div class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Country</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control">
                                                                    <option> --- Please Select --- </option>
                                                                    <option> Bangladesh </option>
                                                                    <option> United States </option>
                                                                    <option> United Kingdom </option>
                                                                    <option> Canada </option>
                                                                    <option> Malaysia </option>
                                                                    <option> United Arab Emirates </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Region / State</label>
                                                            <div class="col-sm-10">
                                                                <select class="form-control">
                                                                    <option> --- Please Select --- </option>
                                                                    <option> Aberdeen </option>
                                                                    <option> Bedfordshire </option>
                                                                    <option> Caerphilly </option>
                                                                    <option> Denbighshire </option>
                                                                    <option> East Ayrshire </option>
                                                                    <option> Falkirk </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label"><sup>*</sup>Post Code</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" placeholder="Post Code" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Shipping -->
                                    </div>
                                </div>
                                <!-- Accordion end -->
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-8">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-right">
                                                        <strong>Sub-Total:</strong>
                                                    </td>
                                                    <td class="text-right">$145.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right">
                                                        <strong>Total:</strong>
                                                    </td>
                                                    <td class="text-right">$145.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="shopping-checkout">
                                    <a href="#" class="btn btn-default pull-left">Continue Shopping</a>
                                    <a href="#" class="btn btn-primary pull-right">Checkout</a>
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
