@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="">Home</a> </li>
                    <li class="separator"></li>
                    <li>Welcome Back, Alex</li>
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
                    <h4 class="h5">{{auth()->guard('e-users')->user()->first_name}} {{auth()->guard('e-users')->user()->last_name}}</h4><span>Joined {{auth()->guard('e-users')->user()->created_at->format('Y-m-d')}}</span>
                  </div>
                </div>
                <nav class="list-group">
                  <a class="list-group-item" href="/user/dashboard"><i class="fa fa-terminal"></i>Dashboard</a>
                  <a class="list-group-item  active" href="/user/profile"><i class="fa fa-user"></i>Profile</a>
                  <a class="list-group-item " href="/user/tickets"><i class="fa fa-file-text"></i>Support Ticket</a>
                  <a class="list-group-item with-badge " href="/user/orders"><i class="fa fa-shopping-bag"></i>Orders<span class="badge badge-default badge-pill">11</span></a>
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
              <a href="/admin/remove/account" type="button" class="btn btn-danger">Remove Account</a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
            <div class="col-lg-8">
              <div class="card">
                  <div class="card-body">
                      <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                          <form class="row" action="/user/profile/update" method="POST" enctype="multipart/form-data">
                            @csrf
                                                      <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="avater" class="form-label">Default file input example</label>
                                      <input class="form-control" type="file" name="photo" id="avater">
                                                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="account-fn">First Name</label>
                                  <input class="form-control" name="first_name" type="text" id="account-fn" value="{{auth()->guard('e-users')->user()->first_name}}">
                                                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="account-ln">Last Name</label>
                                  <input class="form-control" type="text" name="last_name" id="account-ln" value="{{auth()->guard('e-users')->user()->last_name}}">
                                                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="account-email">E-mail Address</label>
                                  <input class="form-control" name="email" type="email" id="account-email" value="{{auth()->guard('e-users')->user()->email}}">
                                  <input class="form-control" name="user_id" type="text" id="user_id" value="{{auth()->guard('e-users')->user()->id}}" hidden>
                                                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="account-phone">Phone Number</label>
                                  <input class="form-control" name="phone" type="text" id="account-phone" value="{{auth()->guard('e-users')->user()->tel_no}}">
                                                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                  <label for="account-pass">New Password</label>
                                  <input class="form-control" name="password" type="text" id="account-pass" placeholder="Change your password">
                                                                  </div>
                              </div>
                              <div class="col-12">
                                  <hr class="mt-2 mb-3">
                                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                                  <div class="custom-control custom-checkbox d-block">
                                      <input class="custom-control-input" name="newsletter" type="checkbox" id="subscribe_me" checked="">
                                      <label class="custom-control-label" for="subscribe_me">Subscribe</label>
                                  </div>
                                  <button class="btn btn-primary margin-right-none" type="submit"><span>Update Profile</span></button>
                                  </div>
                              </div>
                          </form>
                  </div>
              </div>
            </div>
          </div>
    </div>
@stop