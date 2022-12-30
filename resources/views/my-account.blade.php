<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="my-account.html">My Account</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- CATEGORY-MENU-LIST START -->
                @include('includes.categories', ['parentId' => null])
                <!-- END CATEGORY-MENU-LIST -->
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
                <!-- entry-header-area start -->
                <div class="entry-header-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-header">
                                <h2 class="entry-title">My Account</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- entry-header-area end -->
                <!-- Start checkout-area -->
                <div class="checkout-area">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Accordion start -->
                            <div class="panel-group" id="accordion">
                                <!-- Start My-First-Address -->
                                <div class="panel panel_default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#payment-address">My First Address <i class="fa fa-caret-down"></i> </a>
                                        </h4>
                                    </div>
                                    <div id="payment-address" class="collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6 col-xs-12">
                                                    <fieldset id="account">
                                                        <legend>Your Personal Details</legend>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>First Name</label>
                                                            <input type="text" class="form-control" placeholder="Salim" name="firstname" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Rana" name="lastname" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>E-mail</label>
                                                            <input type="email" class="form-control" placeholder="E-mail" name="email" />
                                                        </div>

                                                    </fieldset>
                                                    <fieldset>
                                                        <legend>Additional information</legend>
                                                        <textarea class="form-control"  rows="6"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <fieldset id="address">
                                                        <legend>Your Address</legend>
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" class="form-control" placeholder="Company" name="company" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>Address 1</label>
                                                            <input type="text" class="form-control" placeholder="Address 1" name="Address_1" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address 2</label>
                                                            <input type="text" class="form-control" placeholder="Address 2" name="Address_2" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Date of Birth</label>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <select class="form-control">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select class="form-control">
                                                                        <option>January</option>
                                                                        <option>February </option>
                                                                        <option>March </option>
                                                                        <option>April </option>
                                                                        <option>May </option>
                                                                        <option>June </option>
                                                                        <option>July </option>
                                                                        <option>August </option>
                                                                        <option>September </option>
                                                                        <option>October </option>
                                                                        <option>November </option>
                                                                        <option>December </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select class="form-control">
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option>1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                        <option>2006</option>
                                                                        <option>2007</option>
                                                                        <option>2008</option>
                                                                        <option>2009</option>
                                                                        <option>2010</option>
                                                                        <option>2011</option>
                                                                        <option>2012</option>
                                                                        <option>2013</option>
                                                                        <option>2014</option>
                                                                        <option>2016</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>City</label>
                                                            <input type="text" class="form-control" placeholder="City" name="city" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>Post Code</label>
                                                            <input type="text" class="form-control" placeholder="Post Code" name="postcode" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>Country</label>
                                                            <select class="form-control">
                                                                <option> --- Please Select --- </option>
                                                                <option> Bangladesh </option>
                                                                <option> United States </option>
                                                                <option> United Kingdom </option>
                                                                <option> Canada </option>
                                                                <option> Malaysia </option>
                                                                <option> United Arab Emirates </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup>*</sup>Region / State</label>
                                                            <select class="form-control">
                                                                <option> --- Please Select --- </option>
                                                                <option> Aberdeen </option>
                                                                <option> Bedfordshire </option>
                                                                <option> Caerphilly </option>
                                                                <option> Denbighshire </option>
                                                                <option> East Ayrshire </option>
                                                                <option> Falkirk </option>
                                                            </select>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="newsletter" checked />
                                                             I wish to subscribe to the Malias newsletter.
                                                        </label>
                                                    </div>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            I have read and agree to the
                                                            <a href="#"><b>Privacy Policy</b></a>
                                                            <input type="checkbox" name="agree" />
                                                            <input type="button" class="btn btn-primary" value="Save" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End My Wish List -->
                            </div>
                            <!-- Accordion end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
