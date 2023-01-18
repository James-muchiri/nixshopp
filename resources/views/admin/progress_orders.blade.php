@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>All Orders</b></h3>
                <div class="right">
                <a href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/csv/export" class="btn btn-info btn-sm d-inline-block">CSV Export</a>
                  <form class="d-inline-block" action="https://geniusdevs.com/codecanyon/omnimart40/admin/bulk/deletes" method="get">
                    <input type="hidden" value="" name="ids[]" id="bulk_delete">
                    <input type="hidden" value="orders" name="table">
                    <button class="btn btn-danger btn-sm">Delete</button>
                  </form>
              </div>
              </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">

        <form action="https://geniusdevs.com/codecanyon/omnimart40/admin/orders" method="GET">
          <div class="row mb-4 justify-content-center">
            <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="form-group p-0">
                <label for="start_date">Start Date *</label>
                <input type="text" name="start_date" id="datepicker" class="form-control datepicker" placeholder="Start Date" value="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-4">
                <div class="form-group  p-0">
                <label for="end_date">End Date *</label>
                <input type="text" name="end_date" id="datepicker1" class="form-control datepicker" placeholder="End Date" value="">
                </div>
            </div>
            <div class="col-lg-12 text-center mt-3">
                <button class="btn btn-success py-1 mr-2">Filter</button>
                <a href="https://geniusdevs.com/codecanyon/omnimart40/admin/orders" class="btn btn-info py-1">Reset</a>
            </div>
        </div>
        </form>


						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 52.4688px;"> <input type="checkbox" data-target="order-bulk-delete" class="form-control bulk_all_delete"> </th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 195.844px;">Order ID</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 200.406px;">Total Amount</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 227.219px;">Payment Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 193.172px;">Order Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 190.891px;">Actions</th></tr>
					</thead>

					<tbody>
              













					<tr id="order-bulk-delete" role="row" class="odd">
  <td><input type="checkbox" class="bulk-item" value="113"></td>

    <td>
        BkTrvXwyEM
    </td>

    <td>
            ৳24,557.95
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/113/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/113">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/113">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="even">
  <td><input type="checkbox" class="bulk-item" value="112"></td>

    <td>
        ox8M3KzuIa
    </td>

    <td>
            ৳29,246.98
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/112/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/112">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/112">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="odd">
  <td><input type="checkbox" class="bulk-item" value="111"></td>

    <td>
        PSzwetzzdC
    </td>

    <td>
            ৳29,246.98
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/111/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/111">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/111">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="even">
  <td><input type="checkbox" class="bulk-item" value="110"></td>

    <td>
        qLTEIBLRBD
    </td>

    <td>
            $494.36
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Unpaid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/110/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/110">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/110">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="odd">
  <td><input type="checkbox" class="bulk-item" value="109"></td>

    <td>
        h6BgCEQdkO
    </td>

    <td>
            $353.18
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Unpaid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/109/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/109">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/109">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="even">
  <td><input type="checkbox" class="bulk-item" value="108"></td>

    <td>
        5hauHHR4TV
    </td>

    <td>
            $348.18
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/108/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/108">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/108">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="odd">
  <td><input type="checkbox" class="bulk-item" value="107"></td>

    <td>
        l8BKLorUHn
    </td>

    <td>
            $353.18
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Unpaid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/107/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/107">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/107">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="even">
  <td><input type="checkbox" class="bulk-item" value="106"></td>

    <td>
        65lAjs1S0p
    </td>

    <td>
            $348.18
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Unpaid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/106/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/106">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/106">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="odd">
  <td><input type="checkbox" class="bulk-item" value="105"></td>

    <td>
        VR1FwSi6BR
    </td>

    <td>
            $1,376.34
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/105/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/105">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/105">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr id="order-bulk-delete" role="row" class="even">
  <td><input type="checkbox" class="bulk-item" value="104"></td>

    <td>
        vvMW7bC6vC
    </td>

    <td>
            $1,376.34
          </td>

    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paid
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/payment_status/Paid">Paid</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/payment_status/Unpaid">Unpaid</a>
            </div>
          </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pending
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/order_status/Pending">Pending</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/order_status/In%20Progress">In Progress</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/order_status/Delivered">Delivered</a>
              <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/status/104/order_status/Canceled">Canceled</a>
            </div>
          </div>
    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm" href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/invoice/104">
                <i class="fas fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/order/delete/104">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr></tbody>

				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
			</div>
		</div>
	</div>

</div>




@stop
