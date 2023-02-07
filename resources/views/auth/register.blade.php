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
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="account-create-box">
                                    <h2 class="box-info">Personal Information</h2>
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="single-create">
                                                <p>First Name <sup>*</sup></p>
                                                <input class="form-control" type="text" name="name"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="single-create">
                                                <p>Last Name <sup>*</sup></p>
                                                <input class="form-control" type="text" name="last_name"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <div class="single-create">
                                                <p>Email Address <sup>*</sup></p>
                                                <input class="form-control" type="email" name="email"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-create">
                                                <p>Password <sup>*</sup></p>
                                                <input class="form-control" type="password" name="password"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="single-create">
                                                <p>Confirm Password <sup>*</sup></p>
                                                <input class="form-control" type="password" name="password_confirmation"/>
                                            </div>
                                        </div>
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
        <!-- END SUBSCRIBE-AREA -->
    </section>

@endsection
