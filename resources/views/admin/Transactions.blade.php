@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>Transactions</b></h3>
                <div class="right">
                    <a href="/admin/transaction/csv/export" class="btn btn-info btn-sm d-inline-block">CSV Export</a>
                    <form class="d-inline-block" action="/admin/bulk/deletes" method="get">
                        <input type="hidden" value="" name="ids[]" id="bulk_delete">
                        <input type="hidden" value="transactions" name="table">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row">
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 34.8438px;">
           <input type="checkbox" data-target="transaction-bulk-delete" class="form-control bulk_all_delete">
         </th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 306.469px;">Customer Names</th>
         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 157.547px;">Transaction ID</th>
         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 140.328px;">Transaction Date</th>
         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 169.828px;">Amount</th>
         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 149.109px;">Phone Number</th>
         <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 76.875px;">Account Balance</th>
        </tr>
					</thead>

					<tbody>
                		


                            @foreach ($transactions as $transaction)
                                
<tr id="transaction-bulk-delete" role="row" class="odd">
    <td><input type="checkbox" class="bulk-item" value="{{$transaction->BillRefNumber}}"></td>
    <td>
                <a href="/admin/user/4">{{$transaction->FirstName}} {{$transaction->MiddleName}}</a>
                
    </td>
    <td>
        <a href="/admin/order/invoice/{{$transaction->BillRefNumber}}">{{$transaction->BillRefNumber}}</a>
    </td>
    <td>
        <p class="badge badge-dark">{{$transaction->TransTime}}</p>
    </td>
    <td>
        <p class="badge badge-primary">{{$transaction->TransAmount}}</p>
    </td>
    <td>
        {{$transaction->MSISDN}}
               
    </td>

    <td>
        {{$transaction->OrgAccountBalance}}
    </td>

</tr>

@endforeach





</tbody>

				</table></div></div>
               </div>
			</div>
		</div>
	</div>

</div>





@stop
