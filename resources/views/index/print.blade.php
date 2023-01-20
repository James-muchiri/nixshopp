
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <title> Ecommerce Shopping Platform
    </title>

    <!-- SEO Meta Tags-->
    <meta name="distribution" content="web">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon Icons-->
    <link rel="icon" type="image/png" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/1629651232pre.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/1629651232pre.png">


    <!-- Google font (font-family: 'Ubuntu', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,500i,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" href="{{ asset('css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"><!-- Color css -->
    <link rel="stylesheet" href="{{ asset('css/color6e7b.css?primary_color=FF6A00') }}"><!-- Modernizr-->
    <script type="text/javascript" src="{{ asset('js/modernizr.min.js') }}"></script>
  


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>


    <script src="/assets/back/js/core/popper.min.js"></script>
    


    <script type="text/javascript" src="/assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>



</head>
<!-- Body-->
<body class="body_theme1">

<div class="container padding-bottom-3x mb-1 print_invoice">
    <div class="card card-body p-5">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/user/orders" class="btn btn-sm btn-primary d-inline-block"><span>Back</span></a>
                        <a href="/order/print/111" target="_blank" class="btn btn-sm btn-primary invoice_price d-inline-block"><span>Print</span></a>
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


</body>





<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/scripts.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/lazy.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/lazy.plugin.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/myscript.js') }}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Header-->



  <script type="text/javascript">
    window.print();
</script>


</html>
