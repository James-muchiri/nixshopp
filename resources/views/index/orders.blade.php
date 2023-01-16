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
                @foreach($orders as $order)
                          <tr>
              <td><a class="navi-link" href="#" data-toggle="modal" data-target="#orderDetails">{{$order->order_number}}</a></td>
              <td>
                                {{$order->total}}
                
              </td>
              <td>
                                <span class="text-info">Pending</span>
                              </td>
              <td>
                                <span class="text-success">Paid</span>
                              </td>

              <td>Tue/Jan/2022</td>
              <td>
                  <a href="/user/invoice/{{$order->id}}" class="btn btn-info btn-sm">Invoice</a>
              </td>
            </tr>
            @endforeach            
                         </tbody>
          </table>
        </div>
            </div>
        </div>

      </div>
    </div>
 </div>

@stop