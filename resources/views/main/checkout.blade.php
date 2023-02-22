@extends('layouts.master')

@section('title', 'checkout')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('includes.bestsellers')
                </div>
                <div class="col-md-9">
                    <!-- START PRODUCT-BANNER -->
                    <!-- END PRODUCT-BANNER -->
                    <!-- Start checkout-area -->
                    <div class="checkout-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-title">
                                    <h2 class="entry-title">Checkout</h2>
                                </div>
                                <!-- Accordion start -->
                                <form class="panel-group" id="accordion" action="{{ route('checkout.confirm') }}" method="POST">
                                    @csrf
                                    <!-- End Checkout-options -->
                                    <div class="panel panel_default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-trigger  collapsed" data-toggle="collapse"
                                                    data-parent="#accordion" href="#payment-address">Step 1: fill the form
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="payment-address" class="collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <fieldset id="address">
                                                            <legend>Your Address</legend>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>Address 1</label>
                                                                <input type="text" class="form-control" required placeholder="Address 1"
                                                                    name="address" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text" class="form-control" required placeholder="Address 2"
                                                                    name="address_2" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>Post Code</label>
                                                                <input type="text" class="form-control" required placeholder="Post Code"
                                                                    name="post_code" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>Country</label>
                                                                <select class="form-control" name="country_id" required>
                                                                    <option> --- Please Select --- </option>
                                                                    @foreach ($countries as $country)
                                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>Region / State</label>
                                                                <select class="form-control" name="region_id" required>
                                                                    <option> --- Please Select --- </option>
                                                                    @foreach ($regions as $region)
                                                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="buttons clearfix">
                                                            <div class="pull-right">
                                                                <input type="button" class="btn btn-primary" value="Continue" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel_default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-trigger collapsed" data-toggle="collapse"
                                                    data-parent="#accordion" href="#checkout-confirm">Step 2: Confirm Order
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="checkout-confirm" class="collapse">
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
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
                                                            @foreach ($cart->getContent() as $product)
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
                                                                        <div class="btn-block cart-put">
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
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</td>
                                                                    <td class="text-right">{{ currency($product->getPriceSum() / 100, 'USD', currency()->getUserCurrency()) }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td class="text-right" colspan="4">
                                                                    <strong>Sub-Total:</strong>
                                                                </td>
                                                                <td class="text-right">{{ currency($cart->getSubTotal() / 100, 'USD', currency()->getUserCurrency()) }}td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-right" colspan="4">
                                                                    <strong>Flat Shipping Rate:</strong>
                                                                </td>
                                                                <td class="text-right">$5.00</td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <div class="buttons pull-right">
                                                    <input type="submit" class="btn btn-primary" value="Confirm Order" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Accordion end -->
                            </div>
                        </div>
                    </div>
                    <!-- End Shopping-Cart -->
                </div>
            </div>
        </div>
    </section>
@endsection
