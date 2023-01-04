@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Brands</b></h3>
                <a class="btn btn-primary  btn-sm" href="/admin/brand/create"><i class="fa fa-plus"></i> Add</a>
                </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                
                                <div class="row"><div class="col-sm-12">
                                    <table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.938px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 135.25px;">Logo</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.938px;">Slug</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160.172px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.875px;">Popular</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 153.828px;">Actions</th></tr>
					</thead>

					<tbody>
                        




                        @foreach ($brands as $brand)
    



					<tr role="row" class="odd">
    <td>
        {{$brand->name}}
    </td>
    <td>
        <img src="/uploads/{{$brand->photo}}" alt="Image Not Found">
    </td>
    <td>
        {{$brand->slug}}
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Disabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/admin/brand/status/19/1/status">Enable</a>
              <a class="dropdown-item" href="/admin/brand/status/19/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/admin/brand/status/19/1/is_popular">Enable</a>
              <a class="dropdown-item" href="/admin/brand/status/19/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="/admin/brand/19/edit">
                <i class="fa fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/brand/19">
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


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			You are going to delete this brand. All contents related with this brand will be lost. Do you want to delete it?
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			<form action="" class="d-inline btn-ok" method="POST">

                <input type="hidden" name="_token" value="JYjeTaAFpWxYxidkdeqcJDL5SdPTspOxaHQSdxD0">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>

			</form>
		</div>

      </div>
    </div>
  </div>


@stop
