@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0">Order Invoice </h3>
                <div>
                    <a class="btn btn-primary btn-sm" href="/admin/orders"><i class="fa fa-chevron-left"></i> Back</a>
                    <a class="btn btn-primary btn-sm" href="/order/print/{{$order->order_number}}" target="_blank"><i class="fa fa-print"></i> print</a>
                </div>
                </div>
        </div>
    </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col text-center">

                                <!-- Logo -->
                                <img class="img-fluid mb-5 mh-70" width="180" alt="Logo" src="{{ asset('images/image.png') }}" >

                            </div>
                            </div> <!-- / .row -->
                            <div class="row">
                                <div class="col-12">
                                    <h5><b>Order Details :</b></h5>

                                    <span class="text-muted">Transaction Id : </span>SSLCZ_TXN_61d70bf5adf75<br>
                                    <span class="text-muted">Order Id : </span>{{$order->order_number}}<br>
                                    <span class="text-muted">Order Date : </span>{{$order->created_at}}<br>
                                    <span class="text-muted">Payment Status : </span>
                                                                        <div class="badge badge-success">
                                                                            {{$order->status}}
                                    </div>
                                                                        <br>
                                    <span class="text-muted">Payment Method : </span>SSLCommerz<br>

                                    <br>
                                    <br>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                      <h5>Billing Address :</h5>
                                          
                                          <span class="text-muted">Name: </span>{{$order->names}}<br>
                                          <span class="text-muted">Email: </span>{{$order->email}}<br>
                                          <span class="text-muted">Phone: </span>{{$order->phone_number}}<br>
                                                                      <span class="text-muted">Address: </span>{{$order->area}} <br>
                                                                                                  <span class="text-muted">Country: </span>kenya<br>
                                                                                                  {{-- <span class="text-muted">City: </span>New York<br>
                                                                                                  <span class="text-muted">Zip: </span>3444<br> --}}
                                                                      
                                </div>
                        
                              </div>

                              <div class="row">
                                <div class="col-12">
              
                                  <!-- Table -->
                                  <div class="table-responsive">
                                    <table class="table table-bordered my-4">
                                      <thead>
                                        <tr>
                                          <th width="50%" class=" bg-transparent border-top-0">
                                            <span class="h6">Products</span>
                                          </th>
                                         
                                          <th class=" bg-transparent border-top-0">
                                            <span class="h6">Quantity</span>
                                          </th>
                                          <th class=" bg-transparent border-top-0 text-right">
                                            <span class="h6">Price</span>
                                          </th>
                                          <th class=" bg-transparent border-top-0">
                                            <span class="h6">Total</span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @php
                                              $carts = unserialize($order->cart); 
                                        @endphp
                                        @foreach ($carts as $cart)
                                        <tr>
                                          <td class="">
                                            {{$cart['product']}}
                                            <p>
                                                                              
                                              
                                                                          </p>
                                          </td>
                                          
                                          <td class="">
                                            {{$cart['quantity']}}
                                          </td>
              
                                          <td class=" text-right">
                                            {{$cart['price']}}
                                            
                                          </td>
                                          <td class="">
                                              {{ $cart['quantity'] * $cart['price'] }}                           
                                          </td>
                                        </tr>
                                        @endforeach            
                                      
                                                                 <tr>
                                          <td class="padding-top-2x" colspan="5">
                                          </td>
                                        </tr>
                                       
                                        
                                        <tr>
                                          <td class=" border-top border-top-2">
                                          <span class="text-muted">Discount</span>
                                          </td>
                                          <td class=" text-right border-top border-top-2" colspan="5">
                                            <span>
                                                                           Ksh 0
                                                                            </span>
                                          </td>
                                        </tr>
              
                                        
                                                                  <tr>
                                          <td class=" border-top border-top-2">
              
                                                                        <strong>Total amount</strong>
                                                                       </td>
                                          <td class=" text-right border-top border-top-2" colspan="5">
                                              <span class="h3">
                                                Ksh {{$order->total}}
                                                                            </span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                    </div>
                </div>
            </div>
        </div>


</div>





@stop
