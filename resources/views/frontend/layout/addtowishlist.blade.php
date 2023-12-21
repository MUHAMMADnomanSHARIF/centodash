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
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Wishlist Area start -->
<div class="wishlist-area ptb-90">
    <div class="container">
        <div class="wishlist-content">
            <form action="#">
                <div class="wishlist-table table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-remove"><span>Remove</span></th>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name"><span>Product</span></th>
                                <th class="w-c-price"><span> Unit Price </span></th>
                                <th class="product-stock-stauts"><span> Stock Status </span></th>
                                <th class="product-add-to-cart"><span>Add to Cart </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-remove"><a href="#">×</a></td>
                                <td class="product-thumbnail"><a href="product-details.html"><img src="assets/img/wishlist/2.jpg" alt="" /></a></td>
                                <td class="product-name"><a href="product-details.html">Summer Hat</a></td>
                                <td class="w-c-price"><span class="amount">$165.00</span></td>
                                <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart"><a href="cart.html"> Add to Cart</a></td>
                            </tr>
                            <tr>
                                <td class="product-remove"><a href="#">×</a></td>
                                <td class="product-thumbnail"><a href="product-details.html"><img src="assets/img/wishlist/1.jpg" alt="" /></a></td>
                                <td class="product-name"><a href="product-details.html">Fashion Wears</a></td>
                                <td class="w-c-price"><span class="amount">$50.00</span></td>
                                <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart"><a href="cart.html"> Add to Cart</a></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Wishlist Area end -->


@endsection

@section('coustomJS')

@endsection
