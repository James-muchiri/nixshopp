@extends('layouts.index')

@section('content')
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="https://geniusdevs.com/codecanyon/omnimart40">Home</a> </li>
                    <li class="separator"></li>
                    <li>Wishlist</li>
                  </ul>
            </div>
        </div>
    </div>
  </div>


  <div class="container padding-bottom-3x mb-1">
    <div class="row">
           <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-info">
                  <div class="user-avatar">
          
                    <img id="avater_photo_view" src="{{ asset('images/images.png') }}"alt="User">
                  </div>
          
                  <div class="user-data">
                    <h4 class="h5">{{auth()->guard('e-users')->user()->first_name}} {{auth()->guard('e-users')->user()->last_name}}</h4><span>Joined {{auth()->guard('e-users')->user()->created_at}}</span>
                  </div>
                </div>
                <nav class="list-group">
                  <a class="list-group-item active" href="/user/dashboard"><i class="fa fa-terminal"></i>Dashboard</a>
                  <a class="list-group-item " href="/user/profile"><i class="fa fa-user"></i>Profile</a>
                  <a class="list-group-item " href="/user/ticket"><i class="fa fa-file-text"></i>Support Ticket</a>
                  <a class="list-group-item with-badge " href="/user/orders"><i class="fa fa-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">11</span></a>
                  <a class="list-group-item " href="/user/addresses"><i class="fa fa-map-pin"></i>Address</a>
                  <a class="list-group-item  with-badge " href="/user/wishlists"><i class="fa fa-heart"></i>Wishlist<span class="badge badge-default badge-pill">3</span></a>
                  <a class="list-group-item remove-account with-badge" data-bs-toggle="modal" data-bs-target=".modal" href="javascript:;"><i class="fa fa-trash"></i>Delete Account</a>
                  <a class="list-group-item with-badge" href="/user/logout"><i class="fa fa-sign-out"></i>Log out</a>
                </nav>
              </aside>
  
      <div class="modal" tabindex="-1">
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
              <a href="https://geniusdevs.com/codecanyon/omnimart40/admin/remove/account" type="button" class="btn btn-danger">Remove Account</a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
            <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
              <!-- Wishlist Table-->
              <div class="u-table-res wishlist-table mb-0">
                <table class="table table-bordered mb-0">
                  <thead>
                    <tr>
                      <th>Wishlist Product</th>
                                          <th class="text-center"><a class="btn btn-sm btn-primary" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlista/delete/all"><span>Clear Wishlist</span></a></th>
                                        </tr>
                  </thead>
                  <tbody>
                                                  <tr>
                      <td>
                        <div class="product-item"><a class="product-thumb" href="https://geniusdevs.com/codecanyon/omnimart40/product/0AENew-French-Elegant-White-Bubble-Sleeve-Party-Dress-Casual-ALine-Dresses-Long-Sleeve-DressesnC"><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134144H03667d1e3ae44be08f32b72d840db095J.jpg" alt="Product"></a>
                          <div class="product-info">
                            <h4 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/0AENew-French-Elegant-White-Bubble-Sleeve-Party-Dress-Casual-ALine-Dresses-Long-Sleeve-DressesnC">New French Elegant White Bubble Sleeve Party Dress Casual A-Line Dresses, Long Sleeve Dresses</a></h4>
                            <div class="text-lg mb-1">$344.83</div>
                            <div class="text-sm">Availability:
                              <div class="d-inline text-success">In Stock</div>
                            </div>
                          </div>
  
                        </div>
                                              <a class="product-button btn btn-primary btn-sm add_to_single_cart" href="javascript:;" data-target="587"><i class="icon-shopping-cart"></i><span>To Cart</span>
                        </a>
                                            </td>
                      <td class="text-center"><a class="remove-from-cart" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/delete/1" data-toggle="tooltip" title="" data-bs-original-title="Remove item" aria-label="Remove item"><i class="icon-x"></i></a></td>
                    </tr>
                                  <tr>
                      <td>
                        <div class="product-item"><a class="product-thumb" href="https://geniusdevs.com/codecanyon/omnimart40/product/UMIDIGI-A--Pro-Android-Mobile-Phone--g---MP-Quad-Camera------FHD--Full-Screen--GB-RAM"><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134938Hcb62dec2d6a241fc90ce2bb04059684em.jpg" alt="Product"></a>
                          <div class="product-info">
                            <h4 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/UMIDIGI-A--Pro-Android-Mobile-Phone--g---MP-Quad-Camera------FHD--Full-Screen--GB-RAM">UMIDIGI A9 Pro Android Mobile Phone 4g 48MP Quad Camera 6.3" FHD+ Full Screen 6GB RAM</a></h4>
                            <div class="text-lg mb-1">$1,573.03</div>
                            <div class="text-sm">Availability:
                              <div class="d-inline text-success">In Stock</div>
                            </div>
                          </div>
  
                        </div>
                                              <a class="product-button btn btn-primary btn-sm add_to_single_cart" href="javascript:;" data-target="540"><i class="icon-shopping-cart"></i><span>To Cart</span>
                        </a>
                                            </td>
                      <td class="text-center"><a class="remove-from-cart" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/delete/3" data-toggle="tooltip" title="" data-bs-original-title="Remove item" aria-label="Remove item"><i class="icon-x"></i></a></td>
                    </tr>
                                  <tr>
                      <td>
                        <div class="product-item"><a class="product-thumb" href="https://geniusdevs.com/codecanyon/omnimart40/product/New-Women-s-Square-Collar-Pleated-Long-Sleeve-Dresses"><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135549Hd734b291822a4cdd8ffe19da91b365e8F.jpg" alt="Product"></a>
                          <div class="product-info">
                            <h4 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/New-Women-s-Square-Collar-Pleated-Long-Sleeve-Dresses">New Women's Square Collar Pleated Long Sleeve Dresses</a></h4>
                            <div class="text-lg mb-1">$144.83</div>
                            <div class="text-sm">Availability:
                              <div class="d-inline text-success">In Stock</div>
                            </div>
                          </div>
  
                        </div>
                                              <a class="product-button btn btn-primary btn-sm add_to_single_cart" href="javascript:;" data-target="525"><i class="icon-shopping-cart"></i><span>To Cart</span>
                        </a>
                                            </td>
                      <td class="text-center"><a class="remove-from-cart" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/delete/2" data-toggle="tooltip" title="" data-bs-original-title="Remove item" aria-label="Remove item"><i class="icon-x"></i></a></td>
                    </tr>
                                                  </tbody>
                </table>
              </div>
              <hr class="mb-4">
                  </div>
              </div>
  
            </div>
          </div>
    </div>




@stop
