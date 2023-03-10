@extends('admin.layouts.index')

@section('content')



<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Sub Categories</b></h3>
                <a href="/admin/store-subcategory" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add </a>
            </div>
        </div>
    </div>

    



	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                      <div class="col-sm-12">
                          <table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 283.969px;">Category</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 282.859px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 155.125px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.047px;">Actions</th></tr>
					</thead>
                    <script>

                        sub_cart_table();
                            </script>
					<tbody id="sub_cart_table">

</tbody>

				</table>
            </div>
        </div>
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
            <span aria-hidden="true">??</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			You are going to delete this subcategory. All contents related with this category will be lost. Do you want to delete it?
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
