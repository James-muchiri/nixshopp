@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Subscribers List</b></h3>
                <a class="btn btn-primary  btn-sm" href="/admin/subscribers/send-mail"><i class="fa fa-envelope"></i> Send Email</a>
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
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.734px;">#</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 803.141px;">Email</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 236.125px;">Action</th></tr>
					</thead>

					<tbody>
                                                
                                                
                        					<tr role="row" class="odd">
                            <td>
                                1
                            </td>
                            <td>
                                moneyritheara64@gmail.com
                            </td>
                            <td>
                                <div class="action-list">
                                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/subscriber/delete/2">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr><tr role="row" class="even">
                            <td>
                                2
                            </td>
                            <td>
                                user@gmail.com
                            </td>
                            <td>
                                <div class="action-list">
                                    <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/subscriber/delete/1">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr></tbody>

				</table></div></div>
</div>
			</div>
		</div>
	</div>

</div>




@stop
