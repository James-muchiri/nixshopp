@extends('admin.layouts.index')

@section('content')

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>All Products</b></h3>
                    <div class="right">
                        <a href="/admin/product/csv/export" class="btn btn-info btn-sm d-inline-block">CSV Export</a>
                        <form class="d-inline-block" action="/admin/bulk/deletes" method="get">
                            <input type="hidden" value="" name="ids[]" id="bulk_delete">
                            <input type="hidden" value="items" name="table">
                            <button class="btn btn-danger btn-sm">Bulk Delete</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>

    <input type="hidden" id="product_url" value="/admin/item">

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
                        <form action="/admin/item" method="GET">
                <div class="product-filter-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mb-2"><b>Product Filter :</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group px-0">
                                <select class="form-control" name="item_type">
                                    <option value="">All Product</option>
                                    <option value="normal">Physical Product</option>
                                    <option value="digital">Digital Product</option>
                                    <option value="license">Licence Product</option>
                                    <option value="affiliate">Affiliat Product</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group px-0">
                                <select class="form-control" name="is_type">
                                    <option disabled="">Select Type</option>
                                    <option value="">All Type</option>
                                    <option value="undefine">Undefine Product</option>
                                    <option value="new">New Arrival</option>
                                    <option value="flash_deal">Flash Deal Product</option>
                                    <option value="feature"> Featured Product</option>
                                    <option value="best">Best Product</option>
                                    <option value="top">Top Product</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group px-0">
                                <select class="form-control" name="category_id">
                                    <option disabled="">Select Category</option>
                                    <option value="">All Category</option>
                                                                        <option value="18">Women Clothing</option>
                                                                        <option value="19">Men Clothing</option>
                                                                        <option value="21">Electronics</option>
                                                                        <option value="22">Beauty &amp; Personal Care</option>
                                                                        <option value="23">Vehicles &amp; Accessories</option>
                                                                        <option value="24">Sports &amp; Entertainment</option>
                                                                        <option value="25">Home &amp; Garden</option>
                                                                        <option value="27">Web Themes &amp; Templates</option>
                                                                    </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="form-group px-0">
                                <select class="form-control" name="orderby">
                                    <option disabled="">Select Order</option>
                                    <option value="asc">Ascending order</option>
                                    <option value="desc">Descending order</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-2">
                            <button type="submit" class="btn btn-primary  py-2  d-inline-block">Filter Product</button>
                        </div>
                    </div>
                </div>
            </form>



            <br>
			<div class="gd-responsive-table">
				<div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

					<thead>
						<tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 16.5px;"> <input type="checkbox" data-target="product-bulk-delete" class="form-control bulk_all_delete"> </th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.75px;">Image</th><th width="30%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 267.5px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 66.5312px;">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 103.609px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 82.2656px;">Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70.2969px;">Item Type</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90.5469px;">Actions</th></tr>
					</thead>


          <script>

product_table();
                </script>
					<tbody id="product_table">




	</tbody>

				</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 10 of 51 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="admin-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
			You are going to delete this item. All contents related with this item will be lost. Do you want to delete it?
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
