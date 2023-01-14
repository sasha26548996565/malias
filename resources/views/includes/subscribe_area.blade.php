<div class="subscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                <div class="subscribe">
                    @auth
                        @if (auth()->user()->is_subscribe)
                            <div class="alert alert-success">You already subscribe!</div>
                        @else
                            <form action="{{ route('subscribe') }}" method="POST">
                                @csrf
                                <input type="email" name="email" required
                                    placeholder="{{ auth()->user()->email }}">
                                <button type="submit">Subscribe</button>
                            </form>
                        @endif
                    @else
                        <div class="alert alert-danger">please login</div>
                    @endauth
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="social-media">
                    <a href="#"><i class="fa fa-facebook fb"></i></a>
                    <a href="#"><i class="fa fa-google-plus gp"></i></a>
                    <a href="#"><i class="fa fa-twitter tt"></i></a>
                    <a href="#"><i class="fa fa-youtube yt"></i></a>
                    <a href="#"><i class="fa fa-linkedin li"></i></a>
                    <a href="#"><i class="fa fa-rss rs"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
