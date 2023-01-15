
@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
      <div class="column">
        <ul class="breadcrumbs">
          <li><a href="/">Home</a> </li>
          <li class="separator"></li>
          <li>Billing address</li>
        </ul>
      </div>
    </div>
  </div>



<div class="container padding-bottom-3x mb-1 checkut-page">
    <div class="row">
      <!-- Billing Adress-->
      <div class="col-xl-9 col-lg-8">
        <div class="steps flex-sm-nowrap mb-5">
            <a class="step active" href="https://geniusdevs.com/codecanyon/omnimart40/checkout/billing/address">
          <h4 class="step-title">1. Billing Address:</h4>
          </a>
          <a class="step" href="https://geniusdevs.com/codecanyon/omnimart40/checkout/review/payment">
          <h4 class="step-title">3. Review and pay</h4>
          </a>
        </div>
        <div class="card">
            <div class="card-body">
                <h6>Billing Address</h6>

          <form id="checkoutBilling" action="/checkout/store" method="POST">
          @csrf       <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-fn">First Name</label>
              <input class="form-control" name="bill_first_name" type="text" required="" id="checkout-fn" value="Alex">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-ln">Last Name</label>
              <input class="form-control" name="bill_last_name" type="text" required="" id="checkout-ln" value="Smith">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout_email_billing">E-mail Address</label>
              <input class="form-control" name="bill_email" type="email" required="" id="checkout_email_billing" value="user@gmail.com">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-phone">Phone Number</label>
              <input class="form-control" name="bill_phone" type="text" id="checkout-phone" required="" value="01728332009">
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address1">Address 1</label>
              <input class="form-control" name="bill_address1" required="" type="text" id="checkout-address1" value="472 Clark Street,  Bay Shore, New York">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-address2">Address 2</label>
              <input class="form-control" name="bill_address2" type="text" id="checkout-address2" value="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-zip">Zip Code</label>
              <input class="form-control" name="bill_zip" type="text" id="checkout-zip" value="3444">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="checkout-city">City</label>
              <input class="form-control" name="bill_city" type="text" required="" id="checkout-city" value="New York">
            </div>
          </div>
        </div>
      



      

                <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="trams__condition">
            <label class="custom-control-label" for="trams__condition">This site is protected by reCAPTCHA and the <a href="http://localhost/my/omnimart3/privacy-policy" target="_blank">Privacy Policy</a> and <a href="http://localhost/my/omnimart3/terms-and-service" target="_blank">Terms of Service</a> apply.</label>
          </div>
        </div>
        
        <div class="d-flex justify-content-between paddin-top-1x mt-4">
            <a class="btn btn-primary btn-sm" href="/product/cart"><span class="hidden-xs-down"><i class="icon-arrow-left"></i>Back To Cart</span></a>
                        <button disabled="" id="continue__button" class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down">Continue</span><i class="icon-arrow-right"></i></button>
                      </div>
        </form>
            </div>
        </div>
      </div>
      <!-- Sidebar          -->
      <div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="card widget widget-featured-posts widget-order-summary p-4">
            <h3 class="widget-title">Order Summary</h3>
            
                                        
            <table class="table">
              <tbody><tr>
                <td>Cart Subtotal:</td>
                <td class="text-gray-dark"  id="total_price" ></td>
              </tr>

                            <tr>
                <td>Estimated discount:</td>
                <td class="text-gray-dark">0.00</td>
              </tr>
              
              
          
                            <tr>
                <td class="text-lg text-primary">Order total</td>
                <td class="text-lg text-primary grand_total_set"></td>
              </tr>
            </tbody></table>
          </section>
      <!-- Items in Cart Widget-->
      <section class="card widget widget-featured-posts widget-featured-products p-4">
        <h3 class="widget-title">Items In Your Cart</h3>
<script>
 checkoutcart();
     </script>
        <div id="checkoucart">
        </div>
      </section>


    </aside>
  </div>
    </div>
  </div>


@stop