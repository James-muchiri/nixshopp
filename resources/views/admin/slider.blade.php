@extends('admin.layouts.index')

@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0  pl-3"><b>Sliders</b></h3>
                <a class="btn btn-primary  btn-sm" href="/admin/slider/create"><i class="fa fa-plus"></i> Add</a>
                </div>
        </div>
    </div>


	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 168.609px;">Image</th><th width="25%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 277.25px;">Title</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 171.062px;">Home Page</th><th width="25%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 277.25px;">Details</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 190.828px;">Actions</th></tr>
					</thead>

					<tbody>
                        


@foreach ($sliders as $slider)

<tr role="row" class="odd">
    <td>
        <img src="{{ asset('uploads') }}/{{$slider->logo}}" alt="Image Not Found">
    </td>

    <td>
             {{$slider->title}}
            </td>
    <td>
       THEME2
    </td>

    <td>
        {{$slider->details}}
            </td>

    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="/admin/slider/18/edit">
                <i class="fa fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="/admin/slider/18">
                <i class="fa fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr>
@endforeach



</tbody>

				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
			You are going to delete this slider. All contents related with this slider will be lost. Do you want to delete it?
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			<form action="" class="d-inline btn-ok" method="POST">

                <input type="hidden" name="_token" value="tf3FObSnjkQ3C1dxnpNIYFhVAHZyY0UvJBZEIKAa">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>

			</form>
		</div>

      </div>
    </div>
  </div>



@stop
