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
                                        @include('includes.card_product', $product)
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
                                                                @include('includes.card_product', $product)
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
                                                                @include('includes.card_product', $product)
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
                                                                @include('includes.card_product', $product)
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
                                                            @include('includes.card_product', $product)
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
                                                            @include('includes.card_product', $product)
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
    </section>
@endsection
