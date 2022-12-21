@extends('admin.layouts.index')

@section('content')



<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Language</b></h3>
                </div>
        </div>
    </div>



	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
            <div class="row">
                <div class="col-5 col-md-3">
                    <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active show" id="v-pills-t9-tab" data-toggle="pill" href="#v-pills-t9" role="tab" aria-controls="v-pills-t9" aria-selected="true">Hero Section Banner</a>
                        <a class="nav-link" id="v-pills-t1-tab" data-toggle="pill" href="#v-pills-t1" role="tab" aria-controls="v-pills-t1" aria-selected="false">3 column banner First</a>
                        <a class="nav-link" id="v-pills-t2-tab" data-toggle="pill" href="#v-pills-t2" role="tab" aria-controls="v-pills-t2" aria-selected="false">Popular Categories</a>
                        <a class="nav-link" id="v-pills-t5-tab" data-toggle="pill" href="#v-pills-t5" role="tab" aria-controls="v-pills-t5" aria-selected="false">3 column banner Second</a>
                        <a class="nav-link" id="v-pills-t3-tab" data-toggle="pill" href="#v-pills-t3" role="tab" aria-controls="v-pills-t3" aria-selected="false">Three column category</a>
                        <a class="nav-link" id="v-pills-t4-tab" data-toggle="pill" href="#v-pills-t4" role="tab" aria-controls="v-pills-t4" aria-selected="false">Featured Categories</a>
                        <a class="nav-link" id="v-pills-t6-tab" data-toggle="pill" href="#v-pills-t6" role="tab" aria-controls="v-pills-t6" aria-selected="false">2 column banner</a>

                    </div>
                </div>
                <div class="col-7 col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-t9" role="tabpanel" aria-labelledby="v-pills-t9-tab">
                            <form class="admin-form" id="heroimg1" enctype="multipart/form-data">
                                @csrf
                                        <input type="hidden" name="banner" value="header banner">          
                                        
                                        
                                        <div class="form-group">
                                            <label for="name">Image 1 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/ONMF222.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img1" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title1">Title *</label>
                                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter Title" value="Watch">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle1">Subtitle </label>
                                            <input type="text" name="subtitle1" class="form-control" id="subtitle1" placeholder="Enter Subtitle" value="50% OFF">
                                        </div>
                                        <div class="form-group">
                                            <label for="url1">URL 1 *</label>
                                            <input type="text" name="url1" class="form-control" id="url1" placeholder="Enter Url" value="#">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                        </div>
                                    </form>
                                        <hr>
                                <form id="heroimg2">
                                    @csrf
                                    <input type="hidden" name="banner" value="header banner">      
                                        <div class="form-group">
                                            <label for="name">Image 2 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/24gX1111.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img2" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title2">Title *</label>
                                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter Title" value="Man">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle2">Subtitle </label>
                                            <input type="text" name="subtitle2" class="form-control" id="subtitle2" placeholder="Enter Subtitle" value="40% OFF">
                                        </div>
                                        <div class="form-group">
                                            <label for="url2">URL 2 *</label>
                                            <input type="text" name="url2" class="form-control" id="url2" placeholder="Enter Url" value="#">
                                        </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-secondary ">Submit</button>
                                    </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-t1" role="tabpanel" aria-labelledby="v-pills-t1-tab">
                            <form class="admin-form" id="3banner1" enctype="multipart/form-data">
                                 @csrf                                  <div class="form-group">
                                            <label for="name">Image 1 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365336391.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img1" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title1">Title *</label>
                                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter Title" value="Watch">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle1">Subtitle *</label>
                                            <input type="text" name="subtitle1" class="form-control" id="subtitle1" placeholder="Enter Subtitle" value="50% OFF">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL 1 *</label>
                                            <input type="text" name="firsturl1" class="form-control" id="firsturl1" placeholder="Enter Banner Url" value="#">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>

                            </form>
                                        <hr>

                                        <form class="admin-form" id="3banner2" enctype="multipart/form-data">
                                            @csrf
                                        <div class="form-group">
                                            <label for="name">Image 2 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365336392.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img2" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title2">Title *</label>
                                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter Title" value="Drone">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle2">Subtitle *</label>
                                            <input type="text" name="subtitle2" class="form-control" id="subtitle2" placeholder="Enter Subtitle" value="40% OFF">
                                        </div>

                                        <div class="form-group">
                                            <label for="firsturl2">URL 2 *</label>
                                            <input type="text" name="firsturl2" class="form-control" id="firsturl2" placeholder="Enter Banner Url" value="#">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                                    </form>
                                    <hr>

                                    <form class="admin-form" id="3banner3" enctype="multipart/form-data">
@csrf
                                        <div class="form-group">
                                            <label for="name">Image 3 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365336393.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img3" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title3">Title *</label>
                                            <input type="text" name="title3" class="form-control" id="title3" placeholder="Enter Title" value="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle3">Subtitle *</label>
                                            <input type="text" name="subtitle3" class="form-control" id="subtitle3" placeholder="Enter Subtitle" value="30% OFF">
                                        </div>


                                        <div class="form-group">
                                            <label for="firsturl3">URL 3 *</label>
                                            <input type="text" name="firsturl3" class="form-control" id="firsturl3" placeholder="Enter Banner Url" value="#">
                                        </div>

                                    <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-t2" role="tabpanel" aria-labelledby="v-pills-t2-tab">

                            <form class="admin-form" id="popular_cat_form">
                                    @csrf             
                                        <div class="form-group">
                                        <label for="popular_title">Section Title *</label>
                                        <input type="text" disabled name="popular_title" class="form-control" id="popular_title" placeholder="Popular Category" value="Popular Categories">
                                    </div>
                                    <hr>
                                    <h2 class=""><b>Category 1 :</b></h2>

                                    <div class="form-group">
                                        <label for="category_id1">Select Category *</label>
                                        <select name="bannercategory_id1" id="bannercategory_id1" class="form-control">

                                            <option disabled selected="">Select Category</option>
                                                                                      @foreach ($category as $cat1)
                                                                                      <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                                                                      @endforeach
                                                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcategory_id1">Select Sub Category </label>
                                        <select name="bannersubcategory_id1" id="bannersubcategory_id1" class="form-control" data-href="/admin/get/childcategory">
                                            <option value="">Select one</option>
                                                                                 </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="childcategory_id1">Select Child Category </label>
                                        <select name="bannerchildcategory_id1" id="bannerchildcategory_id1" class="form-control">
                                            <option value="">Select one</option>
                                                                               </select>
                                    </div>

                                    <hr>
                                    <h2 class=""><b>Category 2 :</b></h2>
                                    <div class="form-group">
                                        <label for="category_id2">Select Category *</label>
                                        <select name="bannercategory_id2" id="bannercategory_id2" data-href="/admin/get/subcategory" class="form-control">
                                            <option disabled selected="">Select Category</option>
                                            @foreach ($category as $cat1)
                                            <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                            @endforeach
                                                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcategory_id2">Select Sub Category </label>
                                        <select name="bannersubcategory_id2" id="bannersubcategory_id2" class="form-control" data-href="/admin/get/childcategory">
                                            <option value="">Select one</option>
                                                                                  </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="childcategory_id2">Select Child Category </label>
                                        <select name="bannerchildcategory_id2" id="bannerchildcategory_id2" class="form-control">
                                            <option value="">Select one</option>
                                                                             </select>
                                    </div>
                                    <hr>
                                    <h2 class=""><b>Category 3 :</b></h2>
                                    <div class="form-group">
                                        <label for="category_id3">Select Category *</label>
                                        <select name="bannercategory_id3" id="bannercategory_id3" data-href="/admin/get/subcategory" class="form-control">
                                            <option disabled selected="">Select Category</option>
                                            @foreach ($category as $cat1)
                                            <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                            @endforeach
                                                                                </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcategory_id3">Select Sub Category </label>
                                        <select name="bannersubcategory_id3" id="bannersubcategory_id3" class="form-control" data-href="/admin/get/childcategory">
                                            <option value="">Select one</option>
                                                                                    </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="childcategory_id3">Select Child Category </label>
                                        <select name="bannerchildcategory_id3" id="bannerchildcategory_id3" class="form-control">
                                            <option value="">Select one</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <h2 class=""><b>Category 4 :</b></h2>
                                    <div class="form-group">
                                        <label for="category_id4">Select Category *</label>
                                        <select name="bannercategory_id4" id="bannercategory_id4" data-href="/admin/get/subcategory" class="form-control">
                                            <option disabled selected="">Select Category</option>
                                            @foreach ($category as $cat1)
                                            <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                            @endforeach
                                                                                  </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="subcategory_id4">Select Sub Category </label>
                                        <select name="bannersubcategory_id4" id="bannersubcategory_id4" class="form-control" data-href="/admin/get/childcategory">
                                            <option value="">Select one</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="childcategory_id4">Select Child Category </label>
                                        <select name="bannerchildcategory_id4" id="bannerchildcategory_id4" class="form-control">
                                            <option value="">Select one</option>
                                                                                    </select>
                                    </div>


                                <div class="form-group">
                                <button type="submit" class="btn btn-secondary ">Submit</button>
                            </div>
                        </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-t5" role="tabpanel" aria-labelledby="v-pills-t5-tab">
                            <form class="admin-form" id="3-column-banner-Second1" enctype="multipart/form-data">
                              @csrf                                  <div class="form-group">
                                            <label for="name">Image 1 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365342794.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img1" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title1">Title *</label>
                                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter Title" value="Watch">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle1">Subtitle *</label>
                                            <input type="text" name="subtitle1" class="form-control" id="subtitle1" placeholder="Enter Subtitle" value="50% OFF">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL 1 *</label>
                                            <input type="text" name="url1" class="form-control" id="url1" placeholder="Enter Banner Url" value="#">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                                        <hr>
                                        <form class="admin-form" id="3-column-banner-Second2" enctype="multipart/form-data">
                                            @csrf
                                        <div class="form-group">
                                            <label for="name">Image 2 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365342795.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img2" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title2">Title *</label>
                                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter Title" value="Man">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle2">Subtitle *</label>
                                            <input type="text" name="subtitle2" class="form-control" id="subtitle2" placeholder="Enter Subtitle" value="40% OFF">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL 2 *</label>
                                            <input type="text" name="url2" class="form-control" id="url2" placeholder="Enter Banner Url" value="#">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                                        </form>
                                        <hr>
                                        <form class="admin-form" id="3-column-banner-Second3" enctype="multipart/form-data">
                                            @csrf
                                        <div class="form-group">
                                            <label for="name">Image 3 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/16365342796.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img3" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title3">Title *</label>
                                            <input type="text" name="title3" class="form-control" id="title3" placeholder="Enter Title" value="Headphone">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle3">Subtitle *</label>
                                            <input type="text" name="subtitle3" class="form-control" id="subtitle3" placeholder="Enter Subtitle" value="60% OFF">
                                        </div>


                                        <div class="form-group">
                                            <label for="url">URL 3 *</label>
                                            <input type="text" name="url3" class="form-control" id="url3" placeholder="Enter Banner Url" value="#">
                                        </div>

                                    <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-t3" role="tabpanel" aria-labelledby="v-pills-t3-tab">
                            <form class="admin-form" id="Three_column_category_form">
                                @csrf             
                                  
                                <hr>
                                <h2 class=""><b>Category 1 :</b></h2>

                                <div class="form-group">
                                    <label for="category_id1">Select Category *</label>
                                    <select name="threecolcategory_id1" id="threecolcategory_id1" class="form-control">

                                        <option disabled selected="">Select Category</option>
                                                                                  @foreach ($category as $cat1)
                                                                                  <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                                                                  @endforeach
                                                                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id1">Select Sub Category </label>
                                    <select name="threecolsubcategory_id1" id="threecolsubcategory_id1" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                             </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id1">Select Child Category </label>
                                    <select name="threecolchildcategory_id1" id="threecolchildcategory_id1" class="form-control">
                                        <option value="">Select one</option>
                                                                           </select>
                                </div>

                                <hr>
                                <h2 class=""><b>Category 2 :</b></h2>
                                <div class="form-group">
                                    <label for="category_id2">Select Category *</label>
                                    <select name="threecolcategory_id2" id="threecolcategory_id2" data-href="/admin/get/subcategory" class="form-control">
                                        <option disabled selected="">Select Category</option>
                                        @foreach ($category as $cat1)
                                        <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                        @endforeach
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id2">Select Sub Category </label>
                                    <select name="threecolsubcategory_id2" id="threecolsubcategory_id2" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                              </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id2">Select Child Category </label>
                                    <select name="threecolchildcategory_id2" id="threecolchildcategory_id2" class="form-control">
                                        <option value="">Select one</option>
                                                                         </select>
                                </div>
                                <hr>
                                <h2 class=""><b>Category 3 :</b></h2>
                                <div class="form-group">
                                    <label for="category_id3">Select Category *</label>
                                    <select name="threecolcategory_id3" id="threecolcategory_id3" data-href="/admin/get/subcategory" class="form-control">
                                        <option disabled selected="">Select Category</option>
                                        @foreach ($category as $cat1)
                                        <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                        @endforeach
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id3">Select Sub Category </label>
                                    <select name="threecolsubcategory_id3" id="threecolsubcategory_id3" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id3">Select Child Category </label>
                                    <select name="threecolchildcategory_id3" id="threecolchildcategory_id3" class="form-control">
                                        <option value="">Select one</option>
                                    </select>
                                </div>
                               
                               


                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary ">Submit</button>
                        </div>
                    </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-t4" role="tabpanel" aria-labelledby="v-pills-t4-tab">
                            <form class="admin-form" id="featured_cat_form">
                                @csrf             
                                    <div class="form-group">
                                    <label for="popular_title">Section Title *</label>
                                    <input type="text" disabled name="popular_title" class="form-control" id="popular_title" placeholder="Popular Category" value="Featured Categories">
                                </div>
                                <hr>
                                <h2 class=""><b>Category 1 :</b></h2>

                                <div class="form-group">
                                    <label for="category_id1">Select Category *</label>
                                    <select name="featuredcategory_id1" id="featuredcategory_id1" class="form-control">

                                        <option disabled selected="">Select Category</option>
                                                                                  @foreach ($category as $cat1)
                                                                                  <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                                                                  @endforeach
                                                                                </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id1">Select Sub Category </label>
                                    <select name="featuredsubcategory_id1" id="featuredsubcategory_id1" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                             </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id1">Select Child Category </label>
                                    <select name="featuredchildcategory_id1" id="featuredchildcategory_id1" class="form-control">
                                        <option value="">Select one</option>
                                                                           </select>
                                </div>

                                <hr>
                                <h2 class=""><b>Category 2 :</b></h2>
                                <div class="form-group">
                                    <label for="category_id2">Select Category *</label>
                                    <select name="featuredcategory_id2" id="featuredcategory_id2" data-href="/admin/get/subcategory" class="form-control">
                                        <option disabled selected="">Select Category</option>
                                        @foreach ($category as $cat1)
                                        <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                        @endforeach
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id2">Select Sub Category </label>
                                    <select name="featuredsubcategory_id2" id="featuredsubcategory_id2" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                              </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id2">Select Child Category </label>
                                    <select name="featuredchildcategory_id2" id="featuredchildcategory_id2" class="form-control">
                                        <option value="">Select one</option>
                                                                         </select>
                                </div>
                                <hr>
                                <h2 class=""><b>Category 3 :</b></h2>
                                <div class="form-group">
                                    <label for="category_id3">Select Category *</label>
                                    <select name="featuredcategory_id3" id="featuredcategory_id3" data-href="/admin/get/subcategory" class="form-control">
                                        <option disabled selected="">Select Category</option>
                                        @foreach ($category as $cat1)
                                        <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                        @endforeach
                                                                            </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id3">Select Sub Category </label>
                                    <select name="featuredsubcategory_id3" id="featuredsubcategory_id3" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                                                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id3">Select Child Category </label>
                                    <select name="featuredchildcategory_id3" id="featuredchildcategory_id3" class="form-control">
                                        <option value="">Select one</option>
                                    </select>
                                </div>
                                <hr>
                                <h2 class=""><b>Category 4 :</b></h2>
                                <div class="form-group">
                                    <label for="category_id4">Select Category *</label>
                                    <select name="featuredcategory_id4" id="featuredcategory_id4" data-href="/admin/get/subcategory" class="form-control">
                                        <option disabled selected="">Select Category</option>
                                        @foreach ($category as $cat1)
                                        <option value="{{$cat1->id}}">{{$cat1->name}}</option>
                                        @endforeach
                                                                              </select>
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id4">Select Sub Category </label>
                                    <select name="featuredsubcategory_id4" id="featuredsubcategory_id4" class="form-control" data-href="/admin/get/childcategory">
                                        <option value="">Select one</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="childcategory_id4">Select Child Category </label>
                                    <select name="featuredchildcategory_id4" id="featuredchildcategory_id4" class="form-control">
                                        <option value="">Select one</option>
                                                                                </select>
                                </div>


                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary ">Submit</button>
                        </div>
                    </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-t6" role="tabpanel" aria-labelledby="v-pills-t6-tab">
                            <form class="admin-form" id="2-column-banner1" enctype="multipart/form-data">
                         @csrf                                      <div class="form-group">
                                            <label for="name">Image 1 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/1636534291b22.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img1" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="title1">Title *</label>
                                            <input type="text" name="title1" class="form-control" id="title1" placeholder="Enter Title" value="Watch">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle1">Subtitle *</label>
                                            <input type="text" name="subtitle1" class="form-control" id="subtitle1" placeholder="Enter Subtitle" value="50% OFF">
                                        </div>

                                        <div class="form-group">
                                            <label for="url">URL 1 *</label>
                                            <input type="text" name="url1" class="form-control" id="url1" placeholder="Enter Banner Url" value="#">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                                
                                        <hr>
                                        <form class="admin-form" id="2-column-banner2" enctype="multipart/form-data">
@csrf
                                        <div class="form-group">
                                            <label for="name">Image 2 *</label>
                                            <br>
                                                <img class="admin-img" src="/images/1636534291b11.jpg" alt="No Image Found">
                                            <br>
                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                        </div>
                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="img2" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title2">Title *</label>
                                            <input type="text" name="title2" class="form-control" id="title2" placeholder="Enter Title" value="Headphones">
                                        </div>
                                        <div class="form-group">
                                            <label for="subtitle2">Subtitle *</label>
                                            <input type="text" name="subtitle2" class="form-control" id="subtitle2" placeholder="Enter Subtitle" value="40% OFF">
                                        </div>
                                        <div class="form-group">
                                            <label for="url">URL 2 *</label>
                                            <input type="text" name="url2" class="form-control" id="url2" placeholder="Enter Banner Url" value="#">
                                        </div>

                                    <div class="form-group">
                                            <button type="submit" class="btn btn-secondary ">Submit</button>
                                </div>
                            </form>
                        </div>

         
                    

                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>



@stop
