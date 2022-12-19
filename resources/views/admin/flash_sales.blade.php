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

    

	

	<div class="card shadow mb-4">
        <div class="card-header">
            <h4 class="card-title">Product Added for Campaign</h4>
            <div class="row">
                <form action="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign" method="POST">
                            <div class="col-md-6">
                        <div class="form-group ">
                            <select id="featured_item" name="item_id" class="form-control">
                                <option value="" disabled="" selected="" >Select Product</option>
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

            <div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

                <thead>
                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90.9531px;">Image</th><th width="40%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 365px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 77.2969px;">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100.594px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.984px;">Show Home Page</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 54.1719px;">Action</th></tr>
                </thead>

                <tbody>
                                                                    
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                             
                    
                <tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134720Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt=""></td>
                              <td>Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual pro</td>
                              <td> $1,352.81</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134938Hcb62dec2d6a241fc90ce2bb04059684em.jpg" alt=""></td>
                              <td>UMIDIGI A9 Pro Android Mobile Phone 4g 48MP Quad Camera 6.3" FHD+ Full Screen 6GB RAM</td>
                              <td> $1,573.03</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/39">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135320H408d7d7e37b4437297de600584c1af1fL.jpg" alt=""></td>
                              <td>2021 Summer Women Clothing Ropa Sexy Lady Cut Out Halter Mini Dresses</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/38">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135337H948b3bef197c492d999473dffa5303f9P.jpg" alt=""></td>
                              <td>Top Sale High Quality Newest Designs Custom Women Clothing Wholesale from China Dresses</td>
                              <td> $59.55</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/37">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135061Hd8364db18d9942a38e89779ca3b4fa7an.jpg" alt=""></td>
                              <td>New Arrive Spring Fall Women Clothing Plus Size Dresses Floral Layered Ruffle Off Shoulder Dress</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/36">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134831H75345266923349e280d5f5e5fd5c71e5a.jpg" alt=""></td>
                              <td>Dropshipping EIS 2.4 inch LCD Full HD 720P Recording 1.3 Mega HD DV SLR Camera</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/35">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134888H624bc94495584b2384c07e2db9f2bdfcd.jpg" alt=""></td>
                              <td>New product 2019 Refurbished used smart phone for I phone XS MAX XR 64GB 256GB 4G</td>
                              <td> $932.58</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/34">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134777H8fb00d2318bd48048dcd8bf2546f3f52h.jpg" alt=""></td>
                              <td>Shirts Menshirts Mens Cotton Shirt Factory Direct Various Style Customization</td>
                              <td> $1,352.81</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/33">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr></tbody>

            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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
