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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ul>
        </nav>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- Contact Area Start -->
<div class="contact-area ptb-80">
    <section class="footer_get_touch_outer">
        <div class="container get-in">
          <div class="footer_get_touch_inner grid-70-30">
            <div class="colmun-70 get_form">
              <div class="get_form_inner">
                <div class="get_form_inner_text">
                  <h3>Get In Touch</h3>
                </div>
                <form action="#">
                  <div class="grid-50-50">
                    <input type="text" class="contact-sectin" placeholder="First Name">
                    <input type="text" class="contact-sectin" placeholder="Last Name">
                    <input type="email" class="contact-sectin" placeholder="Email">
                    <input type="tel" class="contact-sectin" placeholder="Phone/Skype">
                  </div>
                  <div class="grid-full">
                    <textarea id="contact-area" placeholder="About Your Project" cols="30" rows="10"></textarea>
                    <input type="submit" width="100px" id="contact-submit" value="Submit">
                  </div>
                </form>
              </div>
            </div>
            <div class="colmun-30 get_say_form">
              <h5>Say Hi!</h5>
              <ul class="get_say_info_sec">
                <li>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:">info@stackfindover.com</a>
                </li>
                <li>
                  <i class="fa fa-whatsapp"></i>
                  <a href="tel:">+91 9602381997</a>
                </li>
                <li>
                  <i class="fa fa-skype"></i>
                  <a href="#">Stackfindover</a>
                </li>
              </ul>
              <ul class="get_say_social-icn">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
</div>
<!-- Contact Area End -->


@endsection

@section('coustomJS')

@endsection
