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
                                                    @include('includes.card_product', $product)
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
