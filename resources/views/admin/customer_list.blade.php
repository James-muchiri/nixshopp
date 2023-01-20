@extends('admin.layouts.index')

@section('content')



<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 "><b>Customers List</b></h3>
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
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 243.219px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 450.984px;">Email</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 216.438px;">Phone</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 214.359px;">Actions</th></tr>
					</thead>

					<tbody>
              			
@foreach ($users as $user)
    

					<tr role="row" class="odd">
    <td>
       {{$user->first_name}}  {{$user->last_name}}
    </td>
    <td>
        {{$user->email}}
    </td>
    <td>
        {{$user->tel_no}}
    </td>

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="/admin/user/{{$user->id}}">
                <i class="fa fa-eye"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/user/{{$user->id}}">
                <i class="fa fa-trash"></i>
            </a>
        </div>
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
