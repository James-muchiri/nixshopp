@extends('admin.layouts.index')

@section('content')



<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b>Create Slider</b> </h3>
                <a class="btn btn-primary btn-sm" href="/admin/slider"><i class="fa fa-chevron-left"></i> Back</a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">

						</div>
					</div>
                    <div class="row">
                        <div class="col-lg-12">
                         
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <form id="slider_sibmit" enctype="multipart/form-data">
                                        @csrf
                                     <div class="form-group">
                                            <label id="change_label" for="name">Brand Logo </label>
                                            <br>
                                                <img class="admin-img" src="/images/placeholder.png" alt="No Image Found">
                                            <br>
                                            <span id="change_message" class="mt-1">Image Size Should Be 130 x 40</span>
                                        </div>

                                        <div class="form-group position-relative">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="logo" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="title">Title *</label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="slider-link">Link *</label>
                                            <input type="text" name="link" class="form-control" id="slider-link" placeholder="Enter Link" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="details">Details *</label>
                                            <textarea name="details" id="details" class="form-control" rows="5" placeholder="Enter Details"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label id="slider_text" for="name">Set Slider Image *</label>
                                            <br>
                                                <img class="admin-img" src="/images/placeholder.png" alt="No Image Found">
                                            <br>
                                            <span id="chenge_label2" class="mt-1">Image Size Should Be 968 x 530 </span>
                                        </div>

                                        <div class="form-group position-relative ">
                                            <label class="file">
                                                <input type="file" accept="image/*" class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                                <span class="file-custom text-left">Upload Image...</span>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                        </div>

                                    </form>
                                </div>
                               
                          
                              
                              </div>
                        </div>
                    </div>

			</div>

		</div>

	</div>

</div>

				</div>



@stop
