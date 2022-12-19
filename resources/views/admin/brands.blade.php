@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Brands</b></h3>
                <a class="btn btn-primary  btn-sm" href="/admin/brand/create"><i class="fas fa-plus"></i> Add</a>
                </div>
        </div>
    </div>

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
						<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.938px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 135.25px;">Logo</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110.938px;">Slug</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 160.172px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 154.875px;">Popular</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 153.828px;">Actions</th></tr>
					</thead>

					<tbody>
                        








					<tr role="row" class="odd">
    <td>
        Ascis
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336642ascis.jpg" alt="Image Not Found">
    </td>
    <td>
        Ascis
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Disabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/19/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/19/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/19/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/19/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/19/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/19">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="even">
    <td>
        Loreal
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336591lora.jpg" alt="Image Not Found">
    </td>
    <td>
        Loreal
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/16/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/16/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/16/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/16/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/16/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/16">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="odd">
    <td>
        H.M
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336576hm.jpg" alt="Image Not Found">
    </td>
    <td>
        HM
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/15/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/15/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/15/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/15/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/15/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/15">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="even">
    <td>
        Yamaha
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336551yamaha.png" alt="Image Not Found">
    </td>
    <td>
        Yamaha
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/14/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/14/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/14/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/14/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/14/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/14">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="odd">
    <td>
        Samsung
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336479samsung.png" alt="Image Not Found">
    </td>
    <td>
        Samsung
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/11/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/11/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/11/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/11/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/11/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/11">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="even">
    <td>
        Nike
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336489nike.jpg" alt="Image Not Found">
    </td>
    <td>
        Nike
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/10/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/10/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/10/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/10/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/10/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/10">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="odd">
    <td>
        Skyart
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336538skyart.png" alt="Image Not Found">
    </td>
    <td>
        Skyart
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/9/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/9/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/9/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/9/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/9/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/9">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="even">
    <td>
        Lavie
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336517leves.jpg" alt="Image Not Found">
    </td>
    <td>
        Lavie
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/8/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/8/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/8/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/8/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/8/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/8">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr><tr role="row" class="odd">
    <td>
        Adidas
    </td>
    <td>
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632336527add.png" alt="Image Not Found">
    </td>
    <td>
        Adidas
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/7/1/status">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/7/0/status">Disable</a>
            </div>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enabled
            </button>
            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/7/1/is_popular">Enable</a>
              <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/status/7/0/is_popular">Disable</a>
            </div>
        </div>

    </td>
    <td>
        <div class="action-list">
            <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/7/edit">
                <i class="fas fa-edit"></i>
            </a>
            <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/brand/7">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
    </td>
</tr></tbody>

				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
