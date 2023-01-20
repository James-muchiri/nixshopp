
@extends('layouts.index')

@section('content')
<style>
  .card .row.number {
    background-color: #242852;
    width: 100%;
    padding: 1rem 0;
    border-bottom: 1.2px solid #292C58;
}
.cardholder .info, .number .info {
    position: relative;
    margin: 0 40px;
}

</style>
<div class="page-title">
    <div class="container">
      <div class="column">
        <ul class="breadcrumbs">
          <li><a href="">Home</a> </li>
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
        <div class="steps flex-sm-nowrap mb-5"> <a class="step" href="/checkout/billing/address">
          <h4 class="step-title"><i class="icon-check-circle"></i>1. Invoice to:</h4>
          </a>
          <a class="step active" href="/checkout/review/payment">
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

       
        <div class="row mt-4" id="stk-mpesa">
          <h6>Pay with :</h6>
          <div class="col-12" >
            <div class="payment-methods">
                                                        <div class="single-payment-method">
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#cod">
                    <img class="" src="/assets/images/1631032407index.png" alt="Cash On Delivery" title="Cash On Delivery">
                    <p>Cash On Delivery</p>
                </a>
              </div>





              <div class="single-payment-method">
                <a class="text-decoration-none" href="/checkout/lipa_mpesa" data-bs-toggle="modal" data-bs-target="#bank">
                    <img class="" src="{{ asset('images/mpesa.png') }}" alt="Bank Transfer" title="Bank Transfer">
                    <p>Lipa Na M-pesa</p>
                </a>
              </div>





            </div>

            <div class="d-flex justify-content-between paddin-top-1x mt-4">
              <a data-bs-toggle="modal" data-bs-target="#cancel" class="btn btn-primary btn-sm" href="#"><span class="hidden-xs-down"><i class="icon-arrow-left"></i>Cancel Order</span></a>
                          <a data-bs-toggle="modal" data-bs-target="#paylater"  class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down">Pay Later</span><i class="icon-arrow-right"></i></a>
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
          <form action="/checkout-submit" method="POST">
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
          <form id="stk_push">
          <div class="modal-body" id="stk_push_body">
            <div class="col-lg-12 form-group">
              <label for="transaction">Transaction Number</label>
              <input class="form-control" name="txn_id" id="transaction" placeholder="Enter Your Transaction Number" required="">
          </div>
        </div>
          <div class="modal-footer" id="stk_push_footer">

                
        
            <button class="btn btn-primary btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary btn-sm" type="submit"><span>Confirm and Pay</span></button>

          </div></form>
        </div>
      </div>
    </div>

  <!-- cancel-->
  <div class="modal fade" id="cancel" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cancel Order</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are You Sure?</p>
            <p>Do you to cancel your order?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="/user/remove/order" type="button" class="btn btn-danger">Remove Account</a>
          </div>
        </div>
      </div>
    </div>


      <!-- pay later-->
  <div class="modal fade" id="cancel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Remove Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are You Sure?</p>
          <p>Do you remove you account?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="/user/paylater/order" type="button" class="btn btn-danger">Pay Later</a>
        </div>
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



  <script>
    var basePath ='{{ env("APP_URL") }}';

    console.log(basePath);

 
   $(document).ready(function (e) {
     // Submit form data via Ajax
     $("#stk_push").on('submit', function (e) {
         e.preventDefault();
 
 
         next_fs = $('#stk_push');
 
         curInputs = next_fs.find("input[type='text']");
         isValid = true;
         console.log(curInputs);
         for (var i = 0; curInputs.length; i++) {
             //  console.log(curInputs[i].value);
             if (!curInputs[i].value) {
                 isValid = false;
                 $(curInputs[i]).closest(".form-group").addClass("has-error");
                 //   console.log(curInputs[i].value);
             }
         }
         if (isValid) {
 
           var formData = new FormData($(this)[0]);
     formData.append("_token", "{{ csrf_token() }}");
 
     $('#bank').modal('hide');

        
     var loader = '';

              loader = loader +
             '<div id="view_loader_div" class="">'+
             '<div class="product-not-found">'+
               '<img class="loader_image" src="' + basePath+  'images/preloader.gif" alt="">'+
             '</div>'+
           '</div>';
           
             
             $('#stk-mpesa').html(loader);
          
            
             // AJAX code to submit form.
             $.ajax({
                 type: "POST",
          
                 url: "/user/stkpush", //call  to store form data
                 data: formData,
                 dataType: 'json',
                 contentType: false,
                 cache: false,
                 processData: false,
                 success: function (data) {
                     console.log(data);

                   

 
                     var loader = '';

                     loader = loader +
                     '<div class="card">'+
                      '<div class="card-body"> '+  
            '<div class="row">'+
                    '<img src="' + basePath+  'images/mpesal.png" style="width:30%;margin: 0 35%;">'+
                    
            '</div>'+
            '<div class="row number">'+
                '<div class="info">'+
                     '<p style="color:#8F92C3;line-height:1.7;">After recieving the payment confirmation message, press "Confirm Payment" to finish making your order</p>'+
                     '<input type="hidden" name="phone_number" value="" />'+
                     '<input type="hidden" name="orderNo" value=""/>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="card-footer">   '+
         
        '<div class="d-flex justify-content-between paddin-top-1x mt-4">'+
              '<a data-bs-toggle="modal" data-bs-target="#cancel" class="btn btn-primary btn-sm" href="#"><span class="hidden-xs-down"><i class="icon-arrow-left"></i>Resend Request</span></a>'+
                          '<a data-bs-toggle="modal" onclick="confirm_payment()"  class="btn btn-primary  btn-sm" type="button"><span class="hidden-xs-down">Confirm Payment</span><i class="icon-arrow-right"></i></a>'+
                        '</div>'+
                      '</div>'+
                    '</div>';
           
            $('#stk-mpesa').html(loader);

                     if (data.status == 200) {
                         toastr.success('success');
                         //$("#userlogin").reset();
 
               
                         
 
                     }
 
 
 
 
                 },
                 error: function (xhr) {
                     console.log(xhr.responseText)
                 },
 
             });
 
         }
     });
 
 });

 function confirm_payment(){

  let loader = `
             <div id="view_loader_div" class="">
             <div class="product-not-found">
               <img class="loader_image" src="/images/preloader.gif" alt="">
             </div>
           </div>
             `;
            
             
             $('#stk-mpesa').html(loader);


             // AJAX code to submit form.
             $.ajax({
                 type: "get",
          
                 url: "/user/confirmpayment", //call  to store form data
                 dataType: 'json',
                 contentType: false,
                 cache: false,
                 processData: false,
                 success: function (data) {
                     console.log(data);

                
                     if (data.status == 200) {
                       
               
                        var basePath = '{{ env('APP_URL') }}';
                        var rlink = "/user/invoice/"+data.order_number;
                        console.log(basePath);
                        window.location.href = basePath + rlink;
}   
 
             
                   
 
 
 
 
                 },
                 error: function (xhr) {
                     console.log(xhr.responseText)
                 },
 
             });

 }
</script>

@stop
