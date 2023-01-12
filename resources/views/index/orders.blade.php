@extends('layouts.index')

@section('content')


<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="https://geniusdevs.com/codecanyon/omnimart40">Home</a> </li>
                    <li class="separator"></li>
                    <li>Orders</li>
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
                <h4 class="h5">{{auth()->guard('e-users')->user()->first_name}} {{auth()->guard('e-users')->user()->last_name}}</h4><span>Joined  {{auth()->guard('e-users')->user()->created_at->format('Y-m-d')}}</span>
              </div>
            </div>
            <nav class="list-group">
              <a class="list-group-item" href="/user/dashboard"><i class="fa fa-terminal"></i>Dashboard</a>
              <a class="list-group-item " href="/user/profile"><i class="fa fa-user"></i>Profile</a>
              <a class="list-group-item " href="/user/tickets"><i class="fa fa-file-text"></i>Support Ticket</a>
              <a class="list-group-item with-badge  active" href="/user/orders"><i class="fa fa-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">11</span></a>
              {{-- <a class="list-group-item " href="/user/addresses"><i class="fa fa-map-pin"></i>Address</a> --}}
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
            <a href="/user/remove/account" type="button" class="btn btn-danger">Remove Account</a>
          </div>
        </div>
      </div>
    </div>

  </div>
       <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
        <div class="u-table-res">
          <table class="table table-bordered mb-0">
            <thead>
              <tr>
                <th>Order #</th>
                <th>Total</th>
                <th>Order Status</th>
                <th>Payment Status</th>
                <th>Date Purchased</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">PSzwetzzdC</a></td>
              <td>
                                ৳29,246.98
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/111" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">h6BgCEQdkO</a></td>
              <td>
                                $353.18
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/109" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">5hauHHR4TV</a></td>
              <td>
                                $348.18
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/108" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">l8BKLorUHn</a></td>
              <td>
                                $353.18
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/107" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">65lAjs1S0p</a></td>
              <td>
                                $348.18
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/106" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">VR1FwSi6BR</a></td>
              <td>
                                $1,376.34
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Sun/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/105" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">vvMW7bC6vC</a></td>
              <td>
                                $1,376.34
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Sat/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/104" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">e2KL4EJZxo</a></td>
              <td>
                                $146.18
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Sat/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/103" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">eKPMC3ueDA</a></td>
              <td>
                                ₹2,615.90
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Fri/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/102" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">LUIOKYI3iN</a></td>
              <td>
                                $35.35
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Fri/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/101" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">xRUcGkXljN</a></td>
              <td>
                                $5,929.47
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-danger">Unpaid</span>
                              </td>

              <td>Fri/Dec/2021</td>
              <td>
                  <a href="https://geniusdevs.com/codecanyon/omnimart40/user/order/invoice/100" class="btn btn-info btn-sm">Invoice</a>
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

@stop