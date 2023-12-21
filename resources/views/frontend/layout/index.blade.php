@extends('frontend.layout.app')

@section('CoustomCSS')

@endsection

@section('content')
   <!-- Slider Area Start -->
   <div class="slider-area">
    <div class="slider-wrapper owl-carousel carousel-style-dot">
        <div class="single-slide" style="background-image: url('assets/img/slider/1.jpg');">
            <div class="container">
                <div class="slider-banner">
                    <h1>Collection</h1>
                    <h2>Lamps light Color</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In quos aspernatur voluptates?</p>
                    <a href="shop.html" class="banner-btn">Shop now</a>
                </div>
            </div>
        </div>
        <div class="single-slide slide-two" style="background-image: url('assets/img/slider/2.jpg');">
            <div class="container">
                <div class="slider-banner">
                    <h1>inimalist design</h1>
                    <h2>Lounge Chairs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae mollitia distinctio qui?</p>
                    <a href="shop.html" class="banner-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End -->
<!-- Banner Area Start -->
<div class="banner-area text-center pt-90">
    <div class="container ">

            <div class="section-title">

                <h2><span>Categories</span></h2>
            </div>

         <!-- Banner Area Start -->
<div class="banner-area">
    <div class="container">
        <div class="row grid">
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/4.jpg" alt="">
                    <span class="banner-hover-text">Chair collection</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/5.jpg" alt="">
                    <span class="banner-hover-text">Lighting collection</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/6.jpg" alt="">
                    <span class="banner-hover-text">HOME ACCESSORIES</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/7.jpg" alt="">
                    <span class="banner-hover-text">Black Hanging Chair</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/9.jpg" alt="">
                    <span class="banner-hover-text">COFFEE &amp; SIDE TABLES</span>
                </a>
            </div>
            <div class="col-md-3 grid-item">
                <a class="banner-image" href="shop.html">
                    <img src="assets/img/banner/8.jpg" alt="">
                    <span class="banner-hover-text">sofa collection</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->
    </div>
</div>
<!-- Banner Area End -->
<!-- Product Area Start -->
<div class="product-area text-center pt-90 pb-85">
    <div class="container">
        <div class="section-title">
            <span>new shop item</span>
            <h2><span>Nightstands</span></h2>
        </div>
    </div>
    <div class="container">
        <div class="custom-row">
            <div class="product-carousel owl-carousel carousel-style-one">
                <div class="custom-col">
                    <div class="product-item">
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/1.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/2.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Joust Duffle Bag</a></h4>
                            <div class="product-price"><span>$34.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/3.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/4.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum.</a></h4>
                            <div class="product-price"><span>$32.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/5.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/6.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$38.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/7.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/8.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$40.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/9.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/10.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$45.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/11.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/12.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$34.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/13.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/14.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$32.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/15.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/16.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$38.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/17.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/18.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$40.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/19.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/20.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$45.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/22.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/21.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$38.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/23.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/17.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Lorem, ipsum dolor.</a></h4>
                            <div class="product-price"><span>$40.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End -->

<!-- Feature Product Area Start -->
<div class="feature-product-area text-center ptb-60">
    <div class="container">
        <div class="section-title">
            <span>Latest SHOP ITEMS</span>
            <h2><span>Latest products</span></h2>
        </div>
    </div>
    <div class="container fix">
        <div class="custom-row">
            <div class="feature-product-carousel owl-carousel">
                <div class="custom-col">
                    <div class="product-item mb-25">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/13.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/14.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Strive Shoulder Pack</a></h4>
                            <div class="product-price">
                                <span>$32.00</span>
                                <span class="prev-price">$42.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mb-25">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/24.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/25.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Joust Duffle Bag</a></h4>
                            <div class="product-price"><span>$34.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item mb-25">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/26.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/27.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Strive Shoulder Pack</a></h4>
                            <div class="product-price"><span>$32.00</span></div>
                        </div>
                    </div>
                    <div class="product-item mb-25">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/28.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/29.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                            <div class="product-price">
                                <span>$38.00</span>
                                <span class="prev-price">$40.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item mb-25">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/30.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/31.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Wayfarer Messenger Bag</a></h4>
                            <div class="product-price">
                                <span>$40.00</span>
                                <span class="prev-price">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item mb-25">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/23.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/17.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Rival Field Messenger</a></h4>
                            <div class="product-price"><span>$45.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item mb-25">
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/5.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/6.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Joust Duffle Bag</a></h4>
                            <div class="product-price"><span>$34.00</span></div>
                        </div>
                    </div>
                    <div class="product-item mb-25">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/15.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/16.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                            <div class="product-price">
                                <span>$38.00</span>
                                <span class="prev-price">$45.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="product-item mb-25">
                        <span class="">New</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/19.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/20.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h4><a href="shop.html">Rival Field Messenger</a></h4>
                            <div class="product-price"><span>$45.00</span></div>
                        </div>
                    </div>
                    <div class="product-item mb-25">
                        <span class="hot-sale">sale</span>
                        <div class="product-image-hover">
                            <a href="shop.html">
                                <img class="primary-image" src="assets/img/product/32.jpg" alt="">
                                <img class="hover-image" src="assets/img/product/33.jpg" alt="">
                            </a>
                            <div class="product-hover">
                                <button><i class="icon icon-FullShoppingCart"></i></button>
                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                <a href="wishlist.html"><i class="icon icon-Files"></i></a>
                            </div>
                        </div>
                        <div class="product-text">
                            <div class="product-rating">
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                                <i class="fa fa-star color"></i>
                            </div>
                            <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                            <div class="product-price"><span>$38.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Product Area End -->


<!-- Information Area Start -->
<div class="information-area">
    <div class="container">
        <div class="information-wrapper ptb-60">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-information">
                        <div class="s-info-img"><img src="assets/img/icon/shipping.png" alt=""></div>
                        <div class="s-info-text">
                            <h4>free shipping</h4>
                            <span>Free shipping on all US order</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-information">
                        <div class="s-info-img"><img src="assets/img/icon/online.png" alt=""></div>
                        <div class="s-info-text">
                            <h4>Online Support 24/7</h4>
                            <span>Support online 24 hours a day</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-information">
                        <div class="s-info-img"><img src="assets/img/icon/money.png" alt=""></div>
                        <div class="s-info-text">
                            <h4>Money Return</h4>
                            <span>Back guarantee under 7 days</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-information">
                        <div class="s-info-img"><img src="assets/img/icon/member.png" alt=""></div>
                        <div class="s-info-text">
                            <h4>Member Discount</h4>
                            <span>Onevery order over $120.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Information Area End -->
<!-- Testimonieal Section -->

    <div class="section-title ">
        <h2 align="center"><span>Testimonial</span></h2>
    </div>

<div class=" container Testimonieal pb-3">

<div class="  owl-carousel owl-theme row">
<figure class="snip1533 item" data-merge="1">
    <figcaption>
      <blockquote>
        <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
      </blockquote>
      <h3>Wisteria Ravenclaw</h3>
      <h4>Google Inc.</h4>
    </figcaption>
  </figure>
  <figure class="snip1533 item" data-merge="1">
    <figcaption>
      <blockquote>
        <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
      </blockquote>
      <h3>Ursula Gurnmeister</h3>
      <h4>Facebook</h4>
    </figcaption>
  </figure>
  <figure class="snip1533 item" data-merge="1">
    <figcaption>
      <blockquote>
        <p>The only skills I have the patience to learn are those that have no real application in life. </p>
      </blockquote>
      <h3>Ingredia Nutrisha</h3>
      <h4>Twitter</h4>
    </figcaption>
  </figure>
</div>
</div>

<!-- End Testimonieal Section -->

@endsection

@section('coustomJS')

@endsection

