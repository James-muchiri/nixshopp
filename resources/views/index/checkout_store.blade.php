
@extends('layouts.index')

@section('content')
<div class="page-title">
    <div class="container">
      <div class="column">
        <ul class="breadcrumbs">
          <li><a href="https://geniusdevs.com/codecanyon/omnimart40">Home</a> </li>
          <li class="separator"></li>
          <li>Review your order and pay</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container padding-bottom-3x mb-1  checkut-page">
    <div class="row">
      <!-- Payment Methode-->
      <div class="col-xl-9 col-lg-8">
        <div class="steps flex-sm-nowrap mb-5"> <a class="step" href="https://geniusdevs.com/codecanyon/omnimart40/checkout/billing/address">
          <h4 class="step-title"><i class="icon-check-circle"></i>1. Invoice to:</h4>
          </a>
          <a class="step active" href="https://geniusdevs.com/codecanyon/omnimart40/checkout/review/payment">
          <h4 class="step-title">3. Review and pay</h4>
          </a>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="pb-2">Review Your Order :</h6>
        <hr>
        <div class="row padding-top-1x  mb-4">
          <div class="col-sm-6">
            <h6>Invoice address :</h6>
                        <ul class="list-unstyled">
              <li><span class="text-muted">Name: </span>james muchiri</li>
                            <li><span class="text-muted">Address: </span>1224 rrr</li>
                            <li><span class="text-muted">Phone: </span>0718360109</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h6>Shipping address :</h6>
            <ul class="list-unstyled">
              <li><span class="text-muted">Name: </span>james muchiri</li>
                            <li><span class="text-muted">Address: </span>1224 rrr</li>
                            <li><span class="text-muted">Phone: </span>0718360109</li>
            </ul>



          </div>


        </div>

        <h6>Pay with :</h6>
        <div class="row mt-4">
          <div class="col-12">
            <div class="payment-methods">
                                                        <div class="single-payment-method">
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#cod">
                    <img class="" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1631032407index.png" alt="Cash On Delivery" title="Cash On Delivery">
                    <p>Cash On Delivery</p>
                </a>
              </div>





              <div class="single-payment-method">
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#bank">
                    <img class="" src="{{ asset('images/mpesa.png') }}" alt="Bank Transfer" title="Bank Transfer">
                    <p>Lipa Na M-pesa</p>
                </a>
              </div>





            </div>
          </div>
        </div>

        </div>
        </div>

        <!-- Modal Cash on Transfer-->
     <div class="modal fade" id="cod" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title">Transaction Cash On Delivery</h6>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form action="https://geniusdevs.com/codecanyon/omnimart40/checkout-submit" method="POST">
            <input type="hidden" name="_token" value="jXvMJLOlJgrqnNJeoxgy5vUIqJUCm26Q8s9L1q3x">            <input type="hidden" name="payment_method" value="Cash On Delivery" id="">
            <input type="hidden" name="state_id" value="" class="state_id_setup">
            <div class="card-body">
              <p>Cash on Delivery basically means you will pay the amount of product while you get the item delivered to you.</p>
            </div>
          <div class="modal-footer">
            <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal"><span>Cancel</span></button>
            <button class="btn btn-primary btn-sm" type="submit"><span>Cash On Delivery</span></button>

          </div></form>
        </div>
      </div>
    </div>







  <!-- Modal bank -->
  <div class="modal fade" id="bank" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title">Transactions via Bank Transfer</h6>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <form action="https://geniusdevs.com/codecanyon/omnimart40/checkout-submit" method="POST">
          <div class="modal-body">
            <div class="col-lg-12 form-group">
              <label for="transaction">Transaction Number</label>
              <input class="form-control" name="txn_id" id="transaction" placeholder="Enter Your Transaction Number" required="">
          </div>
            <p></p>
            <p>Account Number : 434 3434 3334</p>
            <p>Pay With Bank Transfer.</p>
            <p>Account Name : Jhon Due</p>
            <p>Account Email : demo@gmail.com</p>
            <p></p>
          </div>
          <div class="modal-footer">

              <input type="hidden" name="_token" value="jXvMJLOlJgrqnNJeoxgy5vUIqJUCm26Q8s9L1q3x">              <input type="hidden" name="payment_method" value="Bank">
              <input type="hidden" name="state_id" value="" class="state_id_setup">
            <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary btn-sm" type="submit"><span>Checkout With Bank Transfer</span></button>

          </div></form>
        </div>
      </div>
    </div>

      </div>
      <div class="col-xl-3 col-lg-4">
    <aside class="sidebar">
      <div class="padding-top-2x hidden-lg-up"></div>
        <!-- Order Summary Widget-->
        <section class="card widget widget-featured-posts widget-order-summary p-4">
            <h3 class="widget-title">Order Summary</h3>


            <table class="table">
              <tbody>
                <tr>
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
