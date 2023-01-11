
@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="front.index">Home</a> </li>
                    <li class="separator"></li>
                    <li>Welcome Back </li>
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
              <a href="/admin/remove/account" type="button" class="btn btn-danger">Remove Account</a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
            <div class="col-lg-8">
              <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                  <div class="row u-d-d">
                      <div class="col-md-6 mb-4">
                          <div class="card round">
                              <div class="card-body text-center">
                                  <i class="fa fa-shopping-bag"></i>
                                  <p class="mt-3">All Order</p>
                                  <h4><b>11</b></h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="card round">
                              <div class="card-body text-center">
                                  <i class="fa fa-shopping-bag"></i>
                                  <p class="mt-3">Completed Order</p>
                                  <h4><b>0</b></h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="card round">
                              <div class="card-body text-center">
                                  <i class="fa fa-shopping-bag"></i>
                                  <p class="mt-3">Processing Order</p>
                                  <h4><b>0</b></h4>
                              </div>
                          </div>
                      </div>
  
  
                      <div class="col-md-6 mb-4">
                          <div class="card round">
                              <div class="card-body text-center">
                                  <i class="fa fa-shopping-bag"></i>
                                  <p class="mt-3">Canceled Order</p>
                                  <h4><b>0</b></h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4">
                          <div class="card round">
                              <div class="card-body text-center">
                                  <i class="fa fa-shopping-bag"></i>
                                  <p class="mt-3">Pending Order</p>
                                  <h4><b>11</b></h4>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
          </div>
    </div>







@stop