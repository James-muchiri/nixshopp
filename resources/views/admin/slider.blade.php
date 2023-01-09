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
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

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

				</table></div></div></div>
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
