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
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Cart Main Area Start -->
<div class="cart-main-area ptb-80">
    <div class="container">
        <form action="#">
            <div class="cart-table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="p-image"></th>
                            <th class="p-name">Product Name</th>
                            <th class="p-amount">Unit Price</th>
                            <th class="p-quantity">Qty</th>
                            <th class="p-total">SubTotal</th>
                            <th class="p-edit">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-image">
                                <a href="product-details.html"><img alt="" src="assets/img/cart/1.jpg"></a>
                            </td>
                            <td class="p-name"><a href="product-details.html">Leather Shoes</a></td>
                            <td class="p-amount">$120.00</td>
                            <td class="p-quantity"><input maxlength="12" type="text" value="1" name="quantity"></td>
                            <td class="p-total"><span>$120.00</span></td>
                            <td class="edit"><a href="product-details.html"><img src="assets/img/icon/delte.png" alt=""></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="all-cart-buttons">
                <button class="button" type="button"><span>Continue Shopping</span></button>
</div>
            <div class="row">

                <div class="col-lg-4 col-md-12">
                    <div class="ht-shipping-content">
                        <h3>Discount Code</h3>
                        <p>Enter your coupon code if you have one</p>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="postal-code">
                                    <input type="text" placeholder="">
                                </div>
                                <div class="buttons-set">
                                    <button class="button" type="button"><span>Apply Coupon</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="ht-shipping-content">
                        <h3>Total</h3>
                        <div class="amount-totals">
                            <p class="total">Subtotal <span>$156.87</span></p>
                            <p class="total">Grandtotal <span>$313.74</span></p>
                            <button class="button" type="button"><span>Procced to checkout</span></button>
                            <div class="clearfix"></div>
                            <p class="floatright">Checkout with multiples address</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Cart Main Area End -->

@endsection

@section('coustomJS')

@endsection
