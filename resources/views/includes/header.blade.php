@section('custom_javascript')
    <script>
        jQuery(document).ready(function () {
            jQuery('.language-select').click(function (event) {
                let language = jQuery(this).text();

                jQuery.ajax({
                    url: "{{ route('swapLanguage') }}",
                    method: "GET",
                    data: {
                        "locale": language,
                    }
                });
            });
        });
    </script>
@endsection

<header class="header-area">
    <!-- HEADER-TOP START -->
    <div class="header-top hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="top-menu">
                        <!-- Start Language -->
                        <ul class="language">
                            <li><a href="#"><img class="right-5" src="img/flags/gb.png" alt="#">English<i class="fa fa-caret-down left-5"></i></a>
                                <ul>
                                    @foreach ($languages as $language)
                                        <li><a href="#" class="language-select"><img class="right-5" src="img/flags/fr.png" alt="#">{{ $language->slug }}</a></li>\
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <!-- End Language -->
                        <!-- Start Currency -->
                        <ul class="currency">
                            <li><a href="#"><strong>$</strong>{{ currency()->getUserCurrency() }}<i class="fa fa-caret-down left-5"></i></a>
                                <ul>
                                    <li><a href="#">$ EUR</a></li>
                                    <li><a href="#">$ GBP</a></li>
                                    <li><a href="#">$ USD</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Currency -->
                        <p class="welcome-msg">Default welcome msg!</p>
                    </div>
                    <!-- Start Top-Link -->
                    <div class="top-link">
                        <ul class="link">
                            <li><a href="my-account.html"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="wishlist.html"><i class="fa fa-heart"></i> Wish List (0)</a></li>
                            <li><a href="checkout.html"><i class="fa fa-share"></i> Checkout</a></li>
                            @auth
                                <li><a href="{{ route('logout') }}"><i class="fa fa-unlock-alt"></i> logout</a></li>
                            @else
                            <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            @endauth
                        </ul>
                    </div>
                    <!-- End Top-Link -->
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <div class="header-middle">
        <div class="container">
            <!-- Start Support-Client -->
            <div class="support-client hidden-xs">
                <div class="row">
                    <!-- Start Single-Support -->
                    <div class="col-md-3 hidden-sm">
                        <div class="single-support">
                            <div class="support-content">
                                <i class="fa fa-clock-o"></i>
                                <div class="support-text">
                                    <h1 class="zero gfont-1">working time</h1>
                                    <p>Mon- Sun: 8.00 - 18.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-truck"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Free shipping</h1>
                                <p>On order over $199</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-money"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Money back 100%</h1>
                                <p>Within 30 Days after delivery</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                    <!-- Start Single-Support -->
                    <div class="col-md-3 col-sm-4">
                        <div class="single-support">
                            <i class="fa fa-phone-square"></i>
                            <div class="support-text">
                                <h1 class="zero gfont-1">Phone: 0123456789</h1>
                                <p>Order Online Now !</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single-Support -->
                </div>
            </div>
            <!-- End Support-Client -->
            <!-- Start logo & Search Box -->
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="{{ route('index') }}" title="Malias"><img src="img/logo.png" alt="Malias"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="quick-access">
                        <div class="search-by-category">
                            <div class="search-container">
                                <select>
                                    <option class="all-cate">All Categories</option>
                                    @foreach ($categories->where('parent_id', null) as $category)
                                        <optgroup  class="cate-item-head" label="{{ $category->name }}">
                                            @foreach ($categories->where('parent_id', $category->id) as $childCategory)
                                                <option class="cate-item">{{ $childCategory->name }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="header-search">
                                <form action="{{ route('search') }}" method="GET">
                                    <input type="text" name="search" value="{{ old('search') }}" required placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="top-cart">
                            <ul>
                                <li>
                                    <a href="{{ route('cart.index') }}">
                                        <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="cart-total">
                                            <span class="cart-title">shopping cart</span>
                                            @if ($cart != null)
                                                <span class="cart-item">{{ $cart->getContent()->count() }} item(s)- </span>
                                                <span class="top-cart-price">{{ currency($cart->getSubTotal() / 100, 'USD', currency()->getUserCurrency()) }}</span>
                                            @endif
                                        </span>
                                    </a><span class="price">
                                    <div class="mini-cart-content">
                                        @if ($cart != null)
                                            @foreach ($cart->getContent() as $product)
                                                <div class="cart-img-details">
                                                    <div class="cart-img-photo">
                                                        <a href="#">
                                                            <img src="{{ Storage::url('products/'. $product->attributes['preview']) }}"
                                                                alt="{{ $product->name }}">
                                                            </a>
                                                    </div>
                                                    <div class="cart-img-content">
                                                        <a href="{{ route('product.show', $product->attributes['slug']) }}">
                                                            <h4>{{ $product->name }}</h4>
                                                        </a>
                                                        <span>
                                                            <strong class="text-right">{{ $product->quantity }}</strong>
                                                            <strong class="cart-price text-right">{{ currency($product->price / 100, 'USD', currency()->getUserCurrency()) }}</strong>
                                                        </span>
                                                    </div>
                                                    <div class="pro-del">
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="clear"></div>
                                        <div class="cart-inner-bottom">
                                            <span class="total">
                                                Total:
                                                <span class="amount">
                                                    @if ($cart != null)
                                                        {{ $cart->getSubTotal() / 100 }}$
                                                    @else
                                                        0
                                                    @endif
                                                </span>
                                            </span>
                                            <span class="cart-button-top">
                                                <a href="{{ route('cart.index') }}">View cart</a>
                                                <a href="{{ route('checkout.index') }}">Checkout</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo & Search Box -->
        </div>
    </div>
    <!-- HEADER-MIDDLE END -->
    <!-- START MAINMENU-AREA -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mainmenu hidden-sm hidden-xs">
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="hot"><a href="shop.html">Bestseller Products</a></li>
                                <li class="new"><a href="shop-list.html">New Products</a></li>
                                <li><a href="shop.html">Special Products</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('cart.index') }}">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        @guest
                                            <li><a href="{{ route('register') }}">Create Account</a></li>
                                        @endguest
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN-MENU-AREA -->
    <!-- Start Mobile-menu -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav id="mobile-menu">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="shop.html">Bestseller Products</a></li>
                            <li><a href="shop-list.html">New Products</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('cart.index') }}">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="{{ route('register') }}">Create Account</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile-menu -->
</header>
