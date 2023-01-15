
@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> </li>
                    <li class="separator"></li>
                    <li>Cart</li>
                  </ul>
            </div>
        </div>
    </div>
  </div>



  <div class="container padding-bottom-3x mb-1">

    <!-- Shopping Cart-->
    <div id="view_cart_load">
        <div class="card">
    <div class="card-body">
        <div class="table-responsive shopping-cart">
            <table class="table table-bordered">
<script>

cartfetchRecord();
</script>
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">Subtotal</th>
                  <th class="text-center"><a class="btn btn-sm btn-primary" href="//front/cart/clear"><span>Clear Cart</span></a></th>
                </tr>
              </thead>

              <tbody id="cart_view_load">
                
                
              </tbody>
            </table>
          </div>
    </div>
</div>


  <div class="card mt-4">
      <div class="card-body">
        <div class="shopping-cart-footer">
            <div class="column">
                <form class="coupon-form" method="post" id="coupon_form" action="//promo/submit">
                <input type="hidden" name="_token" value="oIHxzDq2SVue90PBhW1r8UUzRiFukzfQhC5EzAha">     
                           <input disabled class="form-control form-control-sm" name="code" type="text" placeholder="Coming soon" required="">
                <button class="btn btn-primary btn-sm" disabled type="submit"><span>Apply Coupon</span></button>
                </form>
            </div>

            <div class="text-right text-lg column d-none"><span class="text-muted">Discount () : </span><span class="text-gray-dark">$0.00</span></div>

            <div class="text-right column text-lg"><span class="text-muted">Subtotal: </span><span class="text-gray-dark">$1,717.86</span></div>


        </div>
        <div class="shopping-cart-footer">
            <div class="column"><a class="btn btn-primary " href="/"><span><i class="icon-arrow-left"></i> Back to Shopping</span></a></div>
            <div class="column"><a class="btn btn-primary" href="/checkout"><span>Checkout</span></a></div>
        </div>
      </div>
  </div>
</div>


    </div>



@stop