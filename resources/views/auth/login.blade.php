@extends('layouts.master')

@section('title', 'auth')

@section('content')

    <section class="page-content">
        <!-- Start Account-Create-Area -->
        <div class="account-create-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="page-menu">
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li class="active"><a href="account.html">Account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h3 class="title-group gfont-1">Create an Account</h3>
                        </div>
                    </div>
                </div>
                <div class="account-create">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="account-create-box">
                            <h2 class="box-info">Login Information</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-create">
                                        <p>Password <sup>*</sup></p>
                                        <input class="form-control" type="password" name="password"/>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="single-create">
                                        <p>Email Address <sup>*</sup></p>
                                        <input class="form-control" type="email" name="email"/>
                                    </div>
                                </div>
                                <div class="submit-area">
                                    <p class="required text-right">* Required Fields</p>
                                    <button type="submit" class="btn btn-primary floatright">submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Account-Create-Area -->
        <!-- START BRAND-LOGO-AREA -->
        <div class="brand-logo-area carosel-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-brand-logo">
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/4.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/5.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/6.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/1.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-brand-logo">
                                <a href="#"><img src="img/brand/3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BRAND-LOGO-AREA -->
        <!-- START SUBSCRIBE-AREA -->
        <div class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <label class="hidden-sm hidden-xs">Sign Up for Our Newsletter:</label>
                        <div class="subscribe">
                            <form action="#">
                                <input type="text" placeholder="Enter Your E-mail">
                                <button type="submit">Subscribe</button>
                            </form>
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
        <!-- END SUBSCRIBE-AREA -->
    </section>

@endsection
