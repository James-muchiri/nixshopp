@extends('layouts.index')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="/user/orders">Orders</a> </li>
                    <li class="separator"></li>
                    <li>Order Invoice</li>
                  </ul>
            </div>
        </div>
    </div>
  </div>




  <div class="container padding-bottom-3x mb-1 print_invoice">
    <div class="card card-body p-5">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/user/orders" class="btn btn-sm btn-primary d-inline-block"><span>Back</span></a>
                        <a href="/order/print/{{$order->order_number}}" target="_blank" class="btn btn-sm btn-primary invoice_price d-inline-block"><span>Print</span></a>
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                  <div class="col text-center">

                    <!-- Logo -->
                    <img class="img-fluid mb-5 mh-70" alt="Logo" src="{{ asset('images/image.png') }}" >

                  </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12">
                        <h5>Order Details :</h5>

                        <span class="text-muted">Order Id : </span>{{$order->order_number}}<br>
                        <span class="text-muted">Order Date : </span>{{$order->created_at}}<br>
                        <span class="text-muted">Payment Status : </span>
                                                <div class="badge badge-success">
                                                  {{$order->status}}
                        </div>
                                                <br>
                        <span class="text-muted">Payment Method : </span>Lipa na mpesa<br>

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







@stop