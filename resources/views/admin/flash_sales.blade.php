@extends('admin.layouts.index')

@section('content')

<style>

.SelectClass,.SumoSelect.open .search-txt,.SumoUnder {
  position:absolute;
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  top:0;
  left:0
}
.SumoSelect p {
  margin:0
}
.SumoSelect {
  width:400px;
}
.SelectBox {
  padding:5px 8px
}
.sumoStopScroll {
  overflow:hidden
}
.SumoSelect .hidden {
  display:none
}
.SumoSelect .search-txt {
  display:none;
  outline:0
}
.SumoSelect .no-match {
  display:none;
  padding:6px
}
.SumoSelect.open .search-txt {
  display:inline-block;
  width:100%;
  margin:0;
  padding:5px 8px;
  border:none;
  box-sizing:border-box;
  border-radius:5px
}
.SumoSelect.open>.search>label,.SumoSelect.open>.search>span {
visibility:hidden
}
.SelectClass,.SumoUnder {
  right:0;
  height:100%;
  width:100%;
  border:none;
  box-sizing:border-box;
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter:alpha(opacity=0);
  -moz-opacity:0;
  -khtml-opacity:0;
  opacity:0
}
.SelectClass {
  z-index:1
}
.SumoSelect .select-all>label,.SumoSelect>.CaptionCont,.SumoSelect>.optWrapper>.options li.opt label {
  user-select:none;
  -o-user-select:none;
  -moz-user-select:none;
  -khtml-user-select:none;
  -webkit-user-select:none
}
.SumoSelect {
  display:inline-block;
  position:relative;
  outline:0
}
.SumoSelect.open>.CaptionCont,.SumoSelect:focus>.CaptionCont,.SumoSelect:hover>.CaptionCont {
  box-shadow:0 0 2px #7799D0;
  border-color:#7799D0
}
.SumoSelect>.CaptionCont {
  position:relative;
  border-bottom:1px solid #A4A4A4;
  min-height:14px;
  background-color:#fff;

  margin:0
}
.SumoSelect>.CaptionCont>span {
  display:block;
  padding-right:30px;
  text-overflow:ellipsis;
  white-space:nowrap;
  overflow:hidden;
  cursor:default;
  color: black;
}
.SumoSelect>.CaptionCont>span.placeholder {
  color:#ccc;
  font-style:italic
}
.SumoSelect>.CaptionCont>label {
  position:absolute;
  top:0;
  right:0;
  bottom:0;
  width:30px
}
.SumoSelect>.CaptionCont>label>i {
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wMdBhAJ/fwnjwAAAGFJREFUKM9jYBh+gBFKuzEwMKQwMDB8xaOWlYGB4T4DA0MrsuapDAwM//HgNwwMDDbYTJuGQ8MHBgYGJ1xOYGNgYJiBpuEpAwODHSF/siDZ+ISBgcGClEDqZ2Bg8B6CkQsAPRga0cpRtDEAAAAASUVORK5CYII=);
  background-position:center center;
  width:16px;
  height:16px;
  display:block;
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:auto;
  background-repeat:no-repeat;
  opacity:.8
}
.SumoSelect>.optWrapper {
  display:none;
  z-index:1000;
  top:30px;
  width:100%;
  position:absolute;
  left:0;
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  box-sizing:border-box;
  background:#fff;
  border:1px solid #ddd;
  box-shadow:2px 3px 3px rgba(0,0,0,.11);
  border-radius:3px;
  overflow:hidden
}
.SumoSelect.open>.optWrapper {
  top:35px;
  display:block
}
.SumoSelect.open>.optWrapper.up {
  top:auto;
  bottom:100%;
  margin-bottom:5px
}
.SumoSelect>.optWrapper ul {
  list-style:none;
  display:block;
  padding:0;
  margin:0;
  overflow:auto
}
.SumoSelect>.optWrapper>.options {
  border-radius:2px;
  position:relative;
  max-height:250px
}
.SumoSelect>.optWrapper>.options li.group.disabled>label {
  opacity:.5
}
.SumoSelect>.optWrapper>.options li ul li.opt {
  padding-left:22px
}
.SumoSelect>.optWrapper.multiple>.options li ul li.opt {
  padding-left:50px
}
.SumoSelect>.optWrapper.isFloating>.options {
  max-height:100%;
  box-shadow:0 0 100px #595959
}
.SumoSelect>.optWrapper>.options li.opt {
  padding:6px;
  position:relative;
  border-bottom:1px solid #f5f5f5
}
.SumoSelect>.optWrapper>.options>li.opt:first-child {
  border-radius:2px 2px 0 0
}
.SumoSelect>.optWrapper>.options>li.opt:last-child {
  border-radius:0 0 2px 2px;
  border-bottom:none
}
.SumoSelect>.optWrapper>.options li.opt:hover {
  background-color:#E4E4E4
}
.SumoSelect>.optWrapper>.options li.opt.sel {
  background-color:#a1c0e4;
  border-bottom:1px solid #a1c0e4
}
.SumoSelect>.optWrapper>.options li label {
  text-overflow:ellipsis;
  white-space:nowrap;
  overflow:hidden;
  display:block;
  cursor:pointer
}
.SumoSelect>.optWrapper>.options li span {
  display:none
}
.SumoSelect>.optWrapper>.options li.group>label {
  cursor:default;
  padding:8px 6px;
  font-weight:700
}
.SumoSelect>.optWrapper.isFloating {
  position:fixed;
  top:0;
  left:0;
  right:0;
  width:90%;
  bottom:0;
  margin:auto;
  max-height:90%
}
.SumoSelect>.optWrapper>.options li.opt.disabled {
  background-color:inherit;
  pointer-events:none
}
.SumoSelect>.optWrapper>.options li.opt.disabled * {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
  filter:alpha(opacity=50);
  -moz-opacity:.5;
  -khtml-opacity:.5;
  opacity:.5
}
.SumoSelect>.optWrapper.multiple>.options li.opt {
  padding-left:35px;
  cursor:pointer
}
.SumoSelect .select-all>span,.SumoSelect>.optWrapper.multiple>.options li.opt span {
  position:absolute;
  display:block;
  width:30px;
  top:0;
  bottom:0;
  margin-left:-35px
}
.SumoSelect .select-all>span i,.SumoSelect>.optWrapper.multiple>.options li.opt span i {
  position:absolute;
  margin:auto;
  left:0;
  right:0;
  top:0;
  bottom:0;
  width:14px;
  height:14px;
  border:1px solid #AEAEAE;

  box-shadow:inset 0 1px 3px rgba(0,0,0,.15);
  background-color:#fff
}
.SumoSelect>.optWrapper>.MultiControls {
  display:none;
  border-top:1px solid #ddd;
  background-color:#fff;
  box-shadow:0 0 2px rgba(0,0,0,.13);
  border-radius:0 0 3px 3px
}
.SumoSelect>.optWrapper.multiple.isFloating>.MultiControls {
  display:block;
  margin-top:5px;
  position:absolute;
  bottom:0;
  width:100%
}
.SumoSelect>.optWrapper.multiple.okCancelInMulti>.MultiControls {
  display:block
}
.SumoSelect>.optWrapper.multiple.okCancelInMulti>.MultiControls>p {
  padding:6px
}
.SumoSelect>.optWrapper.multiple>.MultiControls>p {
  display:inline-block;
  cursor:pointer;
  padding:12px;
  width:50%;
  box-sizing:border-box;
  text-align:center
}
.SumoSelect>.optWrapper.multiple>.MultiControls>p:hover {
  background-color:#f1f1f1
}
.SumoSelect>.optWrapper.multiple>.MultiControls>p.btnOk {
  border-right:1px solid #DBDBDB;
  border-radius:0 0 0 3px
}
.SumoSelect>.optWrapper.multiple>.MultiControls>p.btnCancel {
  border-radius:0 0 3px
}
.SumoSelect>.optWrapper.isFloating>.options li.opt {
  padding:12px 6px
}
.SumoSelect>.optWrapper.multiple.isFloating>.options li.opt {
  padding-left:35px
}
.SumoSelect>.optWrapper.multiple.isFloating {
  padding-bottom:43px
}
.SumoSelect .select-all.partial>span i,.SumoSelect .select-all.selected>span i,.SumoSelect>.optWrapper.multiple>.options li.opt.selected span i {
  background-color:#11a911;
  box-shadow:none;
  border-color:transparent;
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAGCAYAAAD+Bd/7AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAABMSURBVAiZfc0xDkAAFIPhd2Kr1WRjcAExuIgzGUTIZ/AkImjSofnbNBAfHvzAHjOKNzhiQ42IDFXCDivaaxAJd0xYshT3QqBxqnxeHvhunpu23xnmAAAAAElFTkSuQmCC);
  background-repeat:no-repeat;
  background-position:center center
}
.SumoSelect.disabled {
  opacity:.7;
  cursor:not-allowed
}
.SumoSelect.disabled>.CaptionCont {
  border-color:#ccc;
  box-shadow:none
}
.SumoSelect .select-all {
  border-radius:3px 3px 0 0;
  position:relative;
  border-bottom:1px solid #ddd;
  background-color:#fff;
  padding:8px 0 3px 35px;
  height:20px;
  cursor:pointer
}
.SumoSelect .select-all>label,.SumoSelect .select-all>span i {
  cursor:pointer
}
.SumoSelect .select-all.partial>span i {
  background-color:#ccc
}
.SumoSelect>.optWrapper>.options li.optGroup {
  padding-left:5px;
  text-decoration:underline
}
</style>
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Featured Products</b></h3>
                </div>
        </div>
    </div>


<script>
$(document).ready(function () {
    // Country dependent ajax


    $.ajax({
        type: "GET",
        url: "/admin/getproducts", //call  to store form data
        cache: false,
        success: function (data) {
            //  console.log(data);
            var Products = '<option selected="" disabled="" >Select Product</option>';

            $.each(data.Products, function (index, element) {

                Products = Products +
                    '<option value="' + element.id + '">' + element.name + '</option>';


            });

            //  console.log(Products);

            $('#featured_item').html(Products);
            $('#featured_item').SumoSelect({ search: true, searchText: 'Enter here.' });
        },
        error: function (xhr) {
            console.log(xhr.responseText)
        },


    });



});



</script>


	<div class="card shadow mb-4">
        <div class="card-header">
            <h4 class="card-title">Product Added for Campaign</h4>
            <div class="row">
                <form id="add_featured_product" enctype="multipart/form-data">
                  @csrf
                            <div class="col-md-6">
                        <div class="form-group ">
                            <select id="featured_item" name="featured_item" class="form-control">

                                                   </select>

                                                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add To Campaign</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

		<div class="card-body">

            <div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
<div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

                <thead>
                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90.9531px;">Image</th><th width="40%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 365px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 77.2969px;">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100.594px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.984px;">Show Home Page</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 54.1719px;">Action</th></tr>
                </thead>
                <script>

flash_sales_product_table();
                                  </script>
                <tbody id="featured_product_table">


                </tbody>

            </table></div></div></div>
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
