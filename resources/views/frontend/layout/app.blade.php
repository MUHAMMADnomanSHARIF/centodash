<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>IFurniture</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="  assets/img/favicon.png">

		<!-- all css here -->
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/ie7.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/meanmenu.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/animate.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/bundle.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/slick.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/style.css')}}">
        <link rel="stylesheet" href=" {{asset('assetes/frontend/css/responsive.css')}}">

        @yield('CoustomCSS')
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

         <!-- Header Area Start -->
         <header class="header-area bg-ash">

            <!--Header Middle Area Start -->
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="{{url("/index")}}">ifurniture <!--<img src="assets/img/logo/logo.png" alt="ifurniture">--></a>
                            </div>
                        </div>
                        <div class="col-md-3 invisible">
                            <span class="email-image">
                                <span><img src="assets/img/icon/email.png" alt=""></span>
                                <span><span>Email: </span>admin@LOREM IPSUM.com</span>
                            </span>
                        </div>
                        <div class="col-md-6">
                            <form action="#" method="post" class="header-search">
                                <input type="text" placeholder="Search for item...">
                                <button><i class="icon icon-Search"></i></button>
                            </form>
                            <div class="cart-box-wrapper">
                                <a class="cart-info" href="{{url("/Add-To-Cart")}}">
                                    <span>
                                        <img src=" {{asset('assetes/frontend/img/icon/cart.png')}}" alt="" width="25px" height="25px">
                                        <span style="width: 19px; height: 19px; font-size: 13px;">2</span>
                                    </span>
                                </a>
                                <div class="cart-dropdown">
                                    <button class="close"><i class="fa fa-close"></i></button>
                                    <div class="cart-item-a-wrapper">
                                        <div class="cart-item-amount">
                                            <span class="cart-number"><span>2</span> items</span>
                                            <div class="cart-amount">
                                                <h5>Cart Subtotal :</h5>
                                                <h4>$70.00</h4>
                                            </div>
                                        </div>
                                        <a href="{{url("/Check-Out")}}" class="grey-button">Go to Checkout</a>
                                    </div>
                                    <div class="cart-dropdown-item">
                                        <div class="cart-p-image">
                                            <a href="{{url("/Add-To-Cart")}}"><img src="assets/img/cart/s-1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-p-text">
                                            <a href="{{url("/Add-To-Cart")}}" class="cart-p-name">Crown Summit Backpack</a>
                                            <span>$38.00</span>
                                            <div class="cart-p-qty">
                                                <label>Qty</label>
                                                <input type="text" placeholder="1">
                                                <button><i class="icon icon-Delete"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown-item">
                                        <div class="cart-p-image">
                                            <a href="{{url("/Add-To-Cart")}}"><img src="assets/img/cart/s-2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-p-text">
                                            <a href="{{url("/Add-To-Cart")}}" class="cart-p-name">Strive Shoulder Pack</a>
                                            <span>$32.00</span>
                                            <div class="cart-p-qty">
                                                <label>Qty</label>
                                                <input type="text" placeholder="1">
                                                <button><i class="icon icon-Delete"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-btn-wrapper">
                                        <a href="{{url("/Add-To-Cart")}}" class="grey-button">View and edit cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header Middle Area End -->
            <!-- Mainmenu Area Start -->
            <div class="mainmenu-area header-sticky display-none">
                <div class="container">
                    <div class="menu-wrapper">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{url("/index")}}">Home</a></li>
                                    <li class="megamenu"><a href="#">Megamenu</a>
                                        <ul>
                                            <li>
                                                <ul>
                                                    <li>Beds</li>
                                                    <li><a href="#">Platform Beds</a></li>
                                                    <li><a href="#">Storage Beds</a></li>
                                                    <li><a href="#">Regular Beds</a></li>
                                                    <li><a href="#">Sleigh Beds</a></li>
                                                    <li><a href="#">modern beds</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>Nightstands</li>
                                                    <li><a href="#">Wooden Stand</a></li>
                                                    <li><a href="#">Storage Stand</a></li>
                                                    <li><a href="#">Barrel Stand</a></li>
                                                    <li><a href="#">Black Stand</a></li>
                                                    <li><a href="#">Bedside Stand</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li>Interior</li>
                                                    <li><a href="#">Plastic Cabinet</a></li>
                                                    <li><a href="#">Wooden Doors</a></li>
                                                    <li><a href="#">Kitchen Item</a></li>
                                                    <li><a href="#">Wooden Floors</a></li>
                                                    <li><a href="#">Bathroom Tiles</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url("/All-Product")}}">Shop</a></li>
                                    <li><a href="{{url("/About")}}">About Us</a></li>
                                    <li><a href="{{url("/Blog")}}">Blog</a></li>
                                    <li><a href="{{url("/Contact-Us")}}">Contact</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mainmenu Area End -->
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area container">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                            <li><a href="{{url("/index")}}">HOME</a></li>
                            <li><a href="{{url("/All-Product")}}">Shop</a></li>
                            <li><a href="{{url("/About")}}">About Us</a></li>
                            <li><a href="{{url("/Blog")}}">Blog</a></li>
                            <li><a href="{{url("/Contact-Us")}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End -->

        @yield('content')


	   <!-- Footer Area Start -->
       <footer class="footer-area">
        <div class="footer-top pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="single-footer-widget">
                            <!-- <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo-2.png" alt=""></a>
                            </div> -->
                            <div class=" text-light single-footer-text ">
                                <span>Addresss: Lorem, ipsum dolor.</span>
                                <span>Phone 01: +(800) 123 456 78</span>
                                <span>Phone 02: +(100) 123 456 789</span>
                                <span>Fax : (800) 123 456 789</span>
                                <span>Email:Contact@ifurniture.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h4>ABOUT US</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms & Condition</a></li>
                                <li><a href="FAQ.html">FAQ Section</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="single-footer-widget">
                            <h4>INFORMATION</h4>
                            <ul class="footer-widget-list">
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Your Orders</a></li>
                                <li><a href="#">Subway</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="single-footer-widget">
                            <h4>my account</h4>
                            <ul class="footer-widget-list">
                                <li><a href="{{url("/register")}}">My Account</a></li>
                                <li><a href="{{url("/Check-Out")}}">Checkout</a></li>
                                <li><a href="{{url("/Login")}}">Login</a></li>
                                <li><a href="#">Order status</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h4 >sign up newsletter</h4>
                            <p class="text-light">Be the first to hear about new trending and offers and see how youve helped</p>
                            <div class="newsletter-form mc_embed_signup">
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button id="mc-embedded-subscribe" type="submit" name="subscribe">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-light">
                        <span class="text-light">Copyright &copy; 2023<a href="{{url("/index")}}" class="text-light">I furniture</a>. All rights reserved.</span>
                         <br>
                        <ul class="list-underline col-12 row" style="padding: 0px;">
                            <li class="col-4"><a href="{{url("/Privacy-Policy")}}" class="text-light col-12 p-0 m-0">Privacy policy</a></li>
                            <li class="col-5"><a href="{{url("/Terms")}}" class="text-light col-12 p-0 m-0">Terms & condition</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="social-link text-light">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="payment-image">
                            <img src=" {{asset('assetes/frontend/img/payment.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

		<!-- all js here -->
        <script src=" {{asset('assetes/frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/vendor/bootstrap.bundle.min.js')}} "></script>
        <script src="{{asset('assetes/frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/plugins.js')}}"></script>
        <script src="{{asset('assetes/frontend/js/main.js')}}"></script>
        @yield('coustomJS')
    </body>
</html>
