<div class="category-slider-area">
    <div class="container">
        <div class="row">
            <!-- CATEGORY-MENU-LIST START -->
            <div class="left-category-menu hidden-sm hidden-xs">
                <div class="left-product-cat">
                    <div class="category-heading">
                        <h2>categories</h2>
                    </div>
                    <div class="category-menu-list">
                        <ul>
                            @include('includes.categories', ['parentId' => null])
                            <li class=" rx-parent">
                                <a class="rx-default">
                                    More categories <span class="cat-thumb  fa fa-plus"></span>
                                </a>
                                <a class="rx-show">
                                    close menu <span class="cat-thumb  fa fa-minus"></span>
                                </a>
                            </li>
                            <!-- MENU ACCORDION END -->
                        </ul>
                    </div>
                </div>
                <!-- END CATEGORY-MENU-LIST -->
            </div>
        </div>
    </div>
</div>
