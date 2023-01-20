@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="front.index">Home</a> </li>
                    <li class="separator"></li>
                    <li>Tickets </li>
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
                  <a class="list-group-item  active" href="/user/tickets"><i class="fa fa-file-text"></i>Support Ticket</a>
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
                  <div class="mb-3">
                      <div class="card">
                          <div class="card-body d-flex flex-row justify-content-between align-items-center">
                              <h5 class="mb-0">All Tickets</h5>
                              <a href="/user/ticket/new" class="btn btn-primary btn-sm"><span>Add New</span></a>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-body">
                          <div class="u-table-res">
                              <table class="table table-bordered mb-0">
                                  <thead>
                                  <tr>
                                      <th>Subject #</th>
                                      <th>Status</th>
                                      <th>Last Reply</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                                                  <tr>
                                      <td>I need help</td>
                                      <td>
                                          <span class="badge badge-primary"></span>
                                      </td>
                                                                          <td>1 year ago</td>
                                                                          <td>
                                          <a class="btn btn-info btn-sm" href="/user/ticket/view/1">
                                              <i class="fa fa-eye"> </i> View
                                          </a>
                                          <a class="btn btn-sm btn-danger" href="/user/ticket/delete/1">
                                              <i class="fa fa-trash"> </i> Delete
                                          </a>
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