
<div class="shop-blog-area sidebar">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
        </div>
    </div>
    <div class="row">
        <div class="active-recent-posts carosel-circle">
            @foreach ($recentProducts as $product)
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ Storage::url('products/'. $product->preview) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">{{ $product->name }}</a></h5>
                            <span class="recent-posts-date">{{ $product->created_at->format('Y.m.d H:i:s') }}</span>
                            <p class="posts-short-brif">{{ $product->description }}</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
