@extends('layouts.master')

@section('title', 'about')

@section('content')
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="active"><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Start About-Area -->
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="f-title text-center">
                            <h3 class="title text-uppercase">About Us</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="about-page-cntent">
                            <h3>The standard lorem ipsum passage</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>
                            <blockquote>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu nisi ac mi malesuada vestibulum. Phasellus tempor nunc eleifend cursus molestie. Mauris lectus arcu, pellentesque at sodales sit amet, condimentum id nunc. Donec ornare mattis suscipit. Praesent fermentum accumsan vulputate.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="img-element">
                            <img alt="banner1" src="{{ asset('img/about/about.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About-Area -->
        <!-- Start Our-Team -->
        <div class="our-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="f-title text-center">
                            <h3 class="title text-uppercase">Meet the team</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="item-team text-center">
                            <div class="team-info">
                                <div class="team-img">
                                    <img alt="Team" class="img-responsive" src="{{ asset('img/about/1.jpg') }}">
                                    <div class="mask">
                                        <div class="mask-inner">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Havier Macherano</h4>
                            <h5>Developer</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="item-team text-center">
                            <div class="team-info">
                                <div class="team-img">
                                    <img alt="Team" class="img-responsive" src="{{ asset('img/about/2.jpg') }}">
                                    <div class="mask">
                                        <div class="mask-inner">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Luka Biglia</h4>
                            <h5>Programmer</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="item-team text-center">
                            <div class="team-info">
                                <div class="team-img">
                                    <img alt="Team" class="img-responsive" src="{{ asset('img/about/1.jpg') }}">
                                    <div class="mask">
                                        <div class="mask-inner">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Anzo Perez</h4>
                            <h5>Designer</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="item-team text-center">
                            <div class="team-info">
                                <div class="team-img">
                                    <img alt="Team" class="img-responsive" src="{{ asset('img/about/2.jpg') }}">
                                    <div class="mask">
                                        <div class="mask-inner">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Martin Demichelis</h4>
                            <h5>PHP Developer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
