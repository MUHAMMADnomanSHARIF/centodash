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
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Checkout Area Start -->
<div class="checkout-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel active">
                        <div class="panel-heading" id="headingone">
                            <h4 class="panel-title">

                                    <span>1</span> BILLING INFORMATION

                            </h4>
                        </div>
                        <div id="billing" >
                            <div class="panel-body">
                                <div class="login-form">
                                    <form action="#" method="post">
                                        <div class="customer-name">
                                            <div class="first-name">
                                                <p>First Name<span>*</span></p>
                                                <input type="text" required>
                                            </div>
                                            <div class="last-name">
                                                <p>Last Name<span>*</span></p>
                                                <input type="text" required>
                                            </div>
                                        </div>
                                        <div class="customer-info">
                                            <div class="company-name">
                                                <p>Company</p>
                                                <input type="text">
                                            </div>
                                            <div class="email-address">
                                                <p>Email Adress<span>*</span></p>
                                                <input type="email" required>
                                            </div>
                                        </div>
                                        <p>Address<span>*</span></p>
                                        <input type="text" required>
                                        <input type="text">
                                        <div class="city-country">
                                            <div class="city">
                                                <p>City<span>*</span></p>
                                                <input type="text" required>
                                            </div>
                                            <div class="state">
                                                <p>State/Province</p>
                                                <select class="country">
                                                    <option value="state">Please select region, state or province</option>
                                                    <option value="indo">Bahasa Indonesia</option>
                                                    <option value="melyu">Bahasa Melayu</option>
                                                    <option value="deutsch">Deutsch (Deutschland)</option>
                                                    <option value="austra">English (Australia)</option>
                                                    <option value="canada">English (Canada)</option>
                                                    <option value="india">English (India)</option>
                                                    <option value="ireland">English (Ireland)</option>
                                                    <option value="maktoob">English (Maktoob)</option>
                                                    <option value="malaysia">English (Malaysia)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="city-country">
                                            <div class="city">
                                                <p>Zip/Postal Code<span>*</span></p>
                                                <input type="text" required>
                                            </div>
                                            <div class="state">
                                                <p>Country<span>*</span></p>
                                                <select class="country">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="FR">France</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option selected="selected" value="US">United States</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="customer-info">
                                            <div class="telephone">
                                                <p>Telephone<span>*</span></p>
                                                <input type="text" required>
                                            </div>
                                            <div class="fax">
                                                <p>Fax</p>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="ship-wrap">
                                            <div class="ship-address">
                                                <label>
                                                    <input type="radio" name="shipping_address" value="old-address" checked="checked">Ship to this address
                                                </label>
                                            </div>
                                             <div  class="ship-address">
                                               <label>
                                                    <input type="radio" name="shipping_address" value="new-address" id="ship-new-address">Ship to different address
                                                </label>
                                            </div>
                                        </div>
                                        <div class="ship-new-address-info">
                                            <div class="customer-name">
                                                <div class="first-name">
                                                    <p>First Name<span>*</span></p>
                                                    <input type="text" required>
                                                </div>
                                                <div class="last-name">
                                                    <p>Last Name<span>*</span></p>
                                                    <input type="text" required>
                                                </div>
                                            </div>
                                            <div class="customer-info">
                                                <div class="company-name">
                                                    <p>Company</p>
                                                    <input type="text">
                                                </div>
                                                <div class="email-address">
                                                    <p>Email Adress<span>*</span></p>
                                                    <input type="email" required>
                                                </div>
                                            </div>
                                            <p>Address<span>*</span></p>
                                            <input type="text" required>
                                            <input type="text">
                                            <div class="city-country">
                                                <div class="city">
                                                    <p>City<span>*</span></p>
                                                    <input type="text" required>
                                                </div>
                                                <div class="state">
                                                    <p>State/Province</p>
                                                    <select class="country">
                                                        <option value="state">Please select region, state or province</option>
                                                        <option value="indo">Bahasa Indonesia</option>
                                                        <option value="melyu">Bahasa Melayu</option>
                                                        <option value="deutsch">Deutsch (Deutschland)</option>
                                                        <option value="austra">English (Australia)</option>
                                                        <option value="canada">English (Canada)</option>
                                                        <option value="india">English (India)</option>
                                                        <option value="ireland">English (Ireland)</option>
                                                        <option value="maktoob">English (Maktoob)</option>
                                                        <option value="malaysia">English (Malaysia)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="city-country">
                                                <div class="city">
                                                    <p>Zip/Postal Code<span>*</span></p>
                                                    <input type="text" required>
                                                </div>
                                                <div class="state">
                                                    <p>Country<span>*</span></p>
                                                    <select class="country">
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="FR">France</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option selected="selected" value="US">United States</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="customer-info">
                                                <div class="telephone">
                                                    <p>Telephone<span>*</span></p>
                                                    <input type="text" required>
                                                </div>
                                                <div class="fax">
                                                    <p>Fax</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons-set">
                                            <button class="button" type="button"><span>Continue</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#payment-info">
                                    <span>2</span> PAYMENT INFORMATION
                                </a>
                            </h4>
                        </div>
                        <div id="payment-info" class="collapse">
                            <div class="panel-body">
                                <div class="ship-method payment">
                                    <div class="ship-wrap">
                                        <div class="ship-address">
                                            <input type="radio" name="check" value="check">
                                            <span>Check / Money order </span>
                                        </div>
                                         <div class="ship-address">
                                            <input type="radio" name="check" value="credit">
                                            <span>Credit Card (saved) </span>
                                        </div>
                                    </div>
                                    <div class="buttons-set">
                                        <p class="back-link"><a href="#">Back</a></p>
                                        <button type="button" class="button"><span>Continue</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" data-bs-toggle="collapse" data-parent="#accordion" href="#order-review">
                                    <span>3</span> ORDER REVIEW
                                </a>
                            </h4>
                        </div>
                        <div id="order-review" class="collapse">
                            <div class="panel-body">
                                <form action="#">
                                    <div class="checkout-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="p-name alignleft">Product Name</th>
                                                    <th class="p-amount">Price</th>
                                                    <th class="p-quantity">Qty</th>
                                                    <th class="p-total">SubTotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="p-name">Aliquam consequat</td>
                                                    <td class="p-amount"><span class="amount">£156.87</span></td>
                                                    <td class="p-quantity">1</td>
                                                    <td class="p-total alignright">£156.87</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-name">Spante Congue</td>
                                                    <td class="p-amount"><span class="amount">£156.87</span></td>
                                                    <td class="p-quantity">1</td>
                                                    <td class="p-total alignright">£156.87</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="alignright">Subtotal</td>
                                                    <td>£313.84</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="alignright">Shipping &amp; Handling (Flat Rate - Fixed)    </td>
                                                    <td>£5.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="alignright"><strong>Grand Total</strong></td>
                                                    <td><strong>£318.84</strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="checkout-buttons">
                                            <p>Forgot an Item? <a href="#">Edit Your Cart</a>
</p>
                                            <button type="button" class="default-btn"><span>Place Order</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 mt-4">
                <div class="col-md-12 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-dark">Your cart</span>
                      <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img  src="assets/img/favicon.png" alt="" height="50px" width="50px" >
                          <h6 class="my-0 d-inline">Product name</h6>
                          <small class="text-dark d-block">Brief description</small>
                        </div>
                        <span class="text-dark">$12</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img  src="assets/img/favicon.png" alt="" height="50px" width="50px" >
                          <h6 class="my-0 d-inline">Product name</h6>
                          <small class="text-dark d-block">Brief description</small>
                        </div>
                        <span class="text-dark">$8</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <img  src="assets/img/favicon.png" alt="" height="50px" width="50px" >
                          <h6 class="my-0 d-inline">Product name</h6>
                          <small class="text-dark d-block">Brief description</small>
                        </div>
                        <span class="text-dark">$5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between bg-light">
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                      </li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout Area End -->


@endsection

@section('coustomJS')

@endsection
