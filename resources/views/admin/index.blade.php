
@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->

    
    <div class="card mb-4">
        <h3 class="mb-0 px-3 py-4"><b>Dashboard</b></h3>
    </div>


      <!-- Content Row -->
  <div class="row">

    <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Orders</b></p>
                            <h4 class="card-title">11</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Pending Orders</b></p>
                            <h4 class="card-title">2</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Delivered Orders</b></p>
                            <h4 class="card-title">7</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Canceled Orders</b></p>
                            <h4 class="card-title">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary  bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Product Sale</b></p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary  bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Today Product Order</b></p>
                            <h4 class="card-title">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary  bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>This Month Sale</b></p>
                            <h4 class="card-title">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary  bubble-shadow-small">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>This Year Product Sale</b></p>
                            <h4 class="card-title">10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-danger  bubble-shadow-small">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Earning</b></p>
                            <h4 class="card-title">$4551.5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-danger  bubble-shadow-small">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Today Pending Earning</b></p>
                            <h4 class="card-title">$0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-danger  bubble-shadow-small">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>This Month Earning</b></p>
                            <h4 class="card-title">$0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-danger  bubble-shadow-small">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>This Year Erning</b></p>
                            <h4 class="card-title">$4551.5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row align-items-center">
                        <div class="col-icon">
                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                <i class="far fa-check-circle"></i>
                            </div>
                        </div>
                        <div class="col col-stats ml-3 ml-sm-0">
                            <div class="numbers">
                                <p class="mb-0"><b>Total Products</b></p>
                                <h4 class="card-title">51</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Customers</b></p>
                            <h4 class="card-title">2</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>


      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Categories</b></p>
                            <h4 class="card-title">9</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Brands</b></p>
                            <h4 class="card-title">9</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Reviews</b></p>
                            <h4 class="card-title">2</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Transactions</b></p>
                            <h4 class="card-title">11</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Tickets</b></p>
                            <h4 class="card-title">1</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>



      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Pending Tickets</b></p>
                            <h4 class="card-title">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Open Tickets</b></p>
                            <h4 class="card-title">1</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Blogs</b></p>
                            <h4 class="card-title">8</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total Subscribers</b></p>
                            <h4 class="card-title">4</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card card-stats card-round">
            <div class="card-body ">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info  bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ml-3 ml-sm-0">
                        <div class="numbers">
                            <p class="mb-0"><b>Total System User</b></p>
                            <h4 class="card-title">1</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Monthly Product Sales Report </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="multipleLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Monthly Earnings Report </div>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="multipleLineChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Recent Orders</div>
            </div>
            <div class="card-body pb-0">
                <div class="card-body">
                                          <div class="gd-responsive-table">
                          <table class="table table-bordered table-striped" id="recent-orders" width="100%" cellspacing="0">
                          <thead>
                              <th>Customer</th>
                              <th>Order ID</th>
                              <th>Payment Method</th>
                              <th>Total</th>
                          </thead>
                          <tbody>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/132">w10xGWiN80</a>
                                  </td>
                                  <td>
                                      Stripe
                                  </td>
                                  <td>
                                      $55.35
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/131">TyExwhsbeS</a>
                                  </td>
                                  <td>
                                      Cash On Delivery
                                  </td>
                                  <td>
                                      $1,724.52
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/130">j0W5sAeolz</a>
                                  </td>
                                  <td>
                                      Cash On Delivery
                                  </td>
                                  <td>
                                      $171.97
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/129">HhgjzEg09z</a>
                                  </td>
                                  <td>
                                      Stripe
                                  </td>
                                  <td>
                                      $1,512.62
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/128">JrV7oupswB</a>
                                  </td>
                                  <td>
                                      Stripe
                                  </td>
                                  <td>
                                      $175.66
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/127">rTgJph3cv8</a>
                                  </td>
                                  <td>
                                      Paypal
                                  </td>
                                  <td>
                                      $408.16
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/126">Ffr4zOVXnf</a>
                                  </td>
                                  <td>
                                      Stripe
                                  </td>
                                  <td>
                                      $791.47
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/125">0HGakDhxlW</a>
                                  </td>
                                  <td>
                                      Cash On Delivery
                                  </td>
                                  <td>
                                      $97.10
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/124">GPt4RZ0RCq</a>
                                  </td>
                                  <td>
                                      Cash On Delivery
                                  </td>
                                  <td>
                                      $77.10
                                  </td>
                              </tr>
                                                            <tr>
                                  <td>
                                      <a href="/admin/user/1">Alex Smith</a>
                                  </td>
                                  <td>
                                      <a href="/admin/order/invoice/123">ZN6ve2FsBf</a>
                                  </td>
                                  <td>
                                      Stripe
                                  </td>
                                  <td>
                                      $382.66
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


@stop
