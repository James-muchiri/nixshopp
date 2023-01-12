@extends('layouts.index')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="https://geniusdevs.com/codecanyon/omnimart40/user/orders">Orders</a> </li>
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
                        <a href="https://geniusdevs.com/codecanyon/omnimart40/user/orders" class="btn btn-sm btn-primary d-inline-block"><span>Back</span></a>
                        <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/print/111" target="_blank" class="btn btn-sm btn-primary invoice_price d-inline-block"><span>Print</span></a>
                    </div>
                </div> <!-- / .row -->
                <div class="row">
                  <div class="col text-center">

                    <!-- Logo -->
                    <img class="img-fluid mb-5 mh-70" alt="Logo" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634218044logoforsite.png">

                  </div>
                </div> <!-- / .row -->
                <div class="row">
                    <div class="col-12">
                        <h5>Order Details :</h5>

                        <span class="text-muted">Order Id : </span>PSzwetzzdC<br>
                        <span class="text-muted">Order Date : </span>Jan 04, 2022<br>
                        <span class="text-muted">Payment Status : </span>
                                                <div class="badge badge-success">
                          Paid
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
                            
                            <span class="text-muted">Name: </span>Alex Smith<br>
                            <span class="text-muted">Email: </span>user@gmail.com<br>
                            <span class="text-muted">Phone: </span>01728332009<br>
                                                        <span class="text-muted">Address: </span>472 Clark Street,  Bay Shore, New York, <br>
                                                                                    <span class="text-muted">Country: </span>United States<br>
                                                                                    <span class="text-muted">City: </span>New York<br>
                                                                                    <span class="text-muted">Zip: </span>3444<br>
                                                        
                  </div>
                  <div class="col-12 col-md-6">
                    <h5>Shipping Address :</h5>
                                                    <span class="text-muted">Name: </span>Alex Smith <br>
                            <span class="text-muted">Email: </span>user@gmail.com<br>
                            <span class="text-muted">Phone: </span>01728332009<br>
                                                        <span class="text-muted">Address: </span>472 Clark Street,  Bay Shore, New York, <br>
                                                                                    <span class="text-muted">Country: </span>United States<br>
                                                                                    <span class="text-muted">City: </span>New York<br>
                                                                                    <span class="text-muted">Zip: </span>3444<br>
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
                              <span class="h6">Attribute</span>
                            </th>
                            <th class=" bg-transparent border-top-0">
                              <span class="h6">Quantity</span>
                            </th>
                            <th class=" bg-transparent border-top-0 text-right">
                              <span class="h6">Price</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                                                                                                  <tr>
                            <td class="">
                              New French Elegant White Bubble Sleeve Party Dress Casual A-Line Dresses, Long Sleeve Dresses
                              <p>
                                                                
                                
                                                            </p>
                            </td>
                            <td class="">
                                                                                                <span class="entry-meta"><b>Red</b> :
                                                                    ৳420
                                                                  </span>
                                                                <span class="entry-meta"><b>M</b> :
                                                                    ৳420
                                                                  </span>
                                                                                            </td>
                            <td class="">
                              1
                            </td>

                            <td class=" text-right">
                                                            ৳28125.72
                              
                            </td>
                          </tr>
                                                   <tr>
                            <td class="padding-top-2x" colspan="5">
                            </td>
                          </tr>
                                                    <tr>
                            <td class=" border-top border-top-2">
                            <span class="text-muted">Tax</span>
                            </td>
                            <td class=" text-right border-top border-top-2" colspan="5">
                              <span>
                                                                ৳281.26
                                                              </span>
                            </td>
                          </tr>
                          
                          <tr>
                            <td class=" border-top border-top-2">
                            <span class="text-muted">State Tax</span>
                            </td>
                            <td class=" text-right border-top border-top-2" colspan="5">
                              <span>
                                                                ৳0
                                                              </span>
                            </td>
                          </tr>

                                                                                                         <tr>
                            <td class=" border-top border-top-2">
                             <span class="text-muted">Shipping</span>
                            </td>
                            <td class=" text-right border-top border-top-2" colspan="5">
                              <span>
                                                                ৳0
                                                              </span>
                            </td>
                          </tr>
                                                    <tr>
                            <td class=" border-top border-top-2">

                                                          <strong>Total amount</strong>
                                                         </td>
                            <td class=" text-right border-top border-top-2" colspan="5">
                              <span class="h3">
                                                                ৳29,246.98
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