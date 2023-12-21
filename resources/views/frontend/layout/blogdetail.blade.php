@extends('frontend.layout.app')

@section('CoustomCSS')

@endsection

@section('content')


 <!-- Breadcrumb Area Start -->
 <div class="breadcrumb-area bg-dark">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Blog Details Area Start -->
<div class="blog-details-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-image">
                    <a href="blog.html"><img src="assets/img/blog/l-1.jpg" alt=""></a>
                </div>
                <h5>It is a long established fact that a reader will </h5>
                <div class="post-information">
                    <span>BY : ADMIN</span>
                    <span>3 COMMENTS</span>
                </div>
                <div class="blog-details-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.lkf Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. </p>
                    <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostr exercitation ullamco laboris nisi ut aliquip ex. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comm consequat. Duis aute irure dolor in reprehenderit in.</p>

                </div>


            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="single-widget">
                    <form action="#" method="post">
                        <div class="search-box">
                            <input type="text" placeholder="Search......">
                            <button type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>

                <div class="single-widget">
                    <h4 class="details-title">LATEST POST</h4>
                    <div class="recent-item">
                        <a href="blog.html"><img src="assets/img/comment/4.jpg" alt=""></a>
                        <div class="recent-text">
                            <h5><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu.</a></h5>
                            <div class="recent-info">
                                <a href="blog.html">14 SEP 2017</a>
                                <span>5 : 00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="recent-item">
                        <a href="blog.html"><img src="assets/img/comment/3.jpg" alt=""></a>
                        <div class="recent-text">
                            <h5><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu.</a></h5>
                            <div class="recent-info">
                                <a href="blog.html">20 DEC 2017</a>
                                <span>8 : 00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="recent-item">
                        <a href="blog.html"><img src="assets/img/comment/2.jpg" alt=""></a>
                        <div class="recent-text">
                            <h5><a href="blog-details.html">Lorem ipsum dolor sit amet, consectetu.</a></h5>
                            <div class="recent-info">
                                <a href="blog.html">26 JAN 2017</a>
                                <span>7 : 00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog Details Area End -->

@endsection

@section('coustomJS')

@endsection
