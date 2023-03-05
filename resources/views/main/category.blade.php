@extends('layouts.master')

@section('title', 'category ' . $category->name)

@section('custom_css')
    <style rel="stylesheet" href="{{ asset('css/price_range.css') }}"></style>
@endsection

@section('custom_javascript')
    <script src="{{ asset('js/price_range.js') }}"></script>
    @include('includes.ajax.productFilter', ['categorySlug' => $category->slug])
@endsection

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- shop-filter start -->
                    <div class="shop-filter">
                        <div class="area-title">
                            <h3 class="title-group gfont-1">Filters Products</h3>
                        </div>
                        <h4 class="shop-price-title">Price</h4>
                        <div class="info_widget">
                            <div class="price-slider"><span>from
                                <input type="number" class="price-range priceFrom" name="priceFrom" value="5000" min="0" max="120000" /> to
                                <input type="number" class="price-range priceTo" name="priceTo" value="50000" min="0" max="120000" /></span>
                                <input value="25000" min="0" class="price-range" max="120000" step="500" type="range" />
                                <input value="50000" min="0" class="price-range" max="120000" step="500" type="range" />
                                <svg width="100%" height="24">
                                    <line x1="4" y1="0" x2="300" y2="0" stroke="#212121"
                                        stroke-width="12" stroke-dasharray="1 28"></line>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- shop-filter start -->
                    <!-- filter-by start -->
                    <div class="accordion_one">
                        <h4><a class="accordion-trigger" data-toggle="collapse" href="#divone">Color</a></h4>
                        <div id="divone" class="collapse in">
                            <div class="filter-menu">
                                <ul>
                                    <li><a href="#">Black (2)</a></li>
                                    <li><a href="#">Blue (2)</a></li>
                                    <li><a href="#">Brown (3)</a></li>
                                    <li><a href="#">Green (3)</a></li>
                                    <li><a href="#">Orange (2)</a></li>
                                    <li><a href="#">Pink (2)</a></li>
                                    <li><a href="#">Red (11)</a></li>
                                    <li><a href="#">Yellow (3)</a></li>
                                </ul>
                            </div>
                        </div>
                        <h4><a class="accordion-trigger" data-toggle="collapse" href="#div2">manufacture</a></h4>
                        <div id="div2" class="collapse in">
                            <div class="filter-menu">
                                <ul>
                                    <li><a href="#">Chanel (2)</a></li>
                                    <li><a href="#">Christian Dior (2)</a></li>
                                    <li><a href="#">Ermenegildo Zegna (2)</a></li>
                                    <li><a href="#">Ferragamo (1)</a></li>
                                    <li><a href="#">Hermes (2)</a></li>
                                    <li><a href="#">Louis Vuitton (3)</a></li>
                                    <li><a href="#">Prada (1)</a></li>
                                </ul>
                            </div>
                        </div>
                        <h4><a class="accordion-trigger" data-toggle="collapse" href="#div3">Size</a></h4>
                        <div id="div3" class="collapse in">
                            <div class="filter-menu">
                                <ul>
                                    <li><a href="#">L (1)</a></li>
                                    <li><a href="#">M (5)</a></li>
                                    <li><a href="#">S (7)</a></li>
                                    <li><a href="#">XL (5)</a></li>
                                    <li><a href="#">XXL (6)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- filter-by end -->
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
                    <!-- START PRODUCT-AREA -->
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class="title-group-3 gfont-1">{{ $category->name }}</h3>
                                    </div>
                                </div>
                                <div class="product-filter">
                                    <ul role="tablist">
                                        <li role="presentation" class="list active">
                                            <a href="#display-1-1" role="tab" data-toggle="tab"></a>
                                        </li>
                                        <li role="presentation" class="grid ">
                                            <a href="#display-1-2" role="tab" data-toggle="tab"></a>
                                        </li>
                                    </ul>
                                    <div class="sort">
                                        <label>Sort By:</label>
                                        <select>
                                            <option value="#">Default</option>
                                            <option value="#">Name (A - Z)</option>
                                            <option value="#">Name (Z - A)</option>
                                            <option value="#">Price (Low > High)</option>
                                            <option value="#">Rating (Highest)</option>
                                            <option value="#">Rating (Lowest)</option>
                                            <option value="#">Name (A - Z)</option>
                                            <option value="#">Model (Z - A))</option>
                                            <option value="#">Model (A - Z)</option>
                                        </select>
                                    </div>
                                    <div class="limit">
                                        <label>Show:</label>
                                        <select>
                                            <option value="#">8</option>
                                            <option value="#">16</option>
                                            <option value="#">24</option>
                                            <option value="#">40</option>
                                            <option value="#">80</option>
                                            <option value="#">100</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- End Product-Menu -->
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product -->
                                <div class="product">
                                    <div class="tab-content">
                                        <!-- Product -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                            <div class="row">
                                                <div class="listview">
                                                    <!-- Start Single-Product -->
                                                    @foreach ($products as $product)
                                                        @include('includes.card_product', $product)
                                                    @endforeach
                                                    <!-- End Single-Product -->
                                                </div>
                                            </div>
                                            <!-- Start Pagination Area -->
                                            <div class="pagination-area">
                                                {{ $products->withQueryString()->links('includes.pagination') }}
                                            </div>
                                            <!-- End Pagination Area -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product -->
                            </div>
                        </div>
                    </div>
                    <!-- END PRODUCT-AREA -->
                </div>
            </div>
        </div>
    </section>
@endsection
