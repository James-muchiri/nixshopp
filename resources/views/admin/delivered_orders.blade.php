@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>All Orders</b></h3>
                <div class="right">
                <a href="/admin/order/csv/export" class="btn btn-info btn-sm d-inline-block">CSV Export</a>
                  <form class="d-inline-block" action="/admin/bulk/deletes" method="get">
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

        <form action="/admin/Delivered" method="GET">
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
                <a href="/admin/Delivered" class="btn btn-info py-1">Reset</a>
            </div>
        </div>
        </form>


						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="row">
   <div class="col-sm-12">
       <table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 52.4688px;"> <input type="checkbox" data-target="order-bulk-delete" class="form-control bulk_all_delete"> </th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 195.844px;">Order ID</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 200.406px;">Total Amount</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 227.219px;">Payment Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 193.172px;">Order Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 190.891px;">Actions</th></tr>
					</thead>

					<tbody>
              

@foreach ($orders as $order)
<tr id="order-bulk-delete" role="row" class="odd">
    <td><input type="checkbox" class="bulk-item" value="{{$order->id}}"></td>
  
      <td>
        {{$order->order_number}}
      </td>
  
      <td>
        {{$order->total}}
            </td>
  
      <td>
          <div class="dropdown">
              <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Paid
              </button>
              <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/payment_status/Paid">Paid</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/payment_status/Unpaid">Unpaid</a>
              </div>
            </div>
      </td>
      <td>
          <div class="dropdown">
              <button class="btn Pending  btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pending
              </button>
              <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/order_status/Pending">Pending</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/order_status/In%20Progress">In Progress</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/order_status/Delivered">Delivered</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#statusModal" href="javascript:;" data-href="/admin/order/status/113/order_status/Canceled">Canceled</a>
              </div>
            </div>
      </td>
      <td>
        <div class="action-list">
          <a class="btn btn-secondary btn-sm" href="/admin/invoice/{{$order->id}}">
              <i class="fa fa-eye"></i>
          </a>
          <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/order/delete/{{$order->id}}">
              <i class="fa fa-trash"></i>
          </a>
      </div>
      </td>
  </tr>
@endforeach

</tbody>

				</table></div></div></div>
			</div>
		</div>
	</div>

</div>



@stop



