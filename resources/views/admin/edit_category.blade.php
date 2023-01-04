@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Update Category</b> </h3>
                <a class="btn btn-primary btn-sm" href="/admin/category"><i class="fa fa-chevron-left"></i> Back</a>
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
                            <form class="admin-form" id="store_editcategory_form"  enctype="multipart/form-data">
								
                                        @csrf
									

                                <div class=" row form-group">
                                    
                                    <div class="col">
										<label for="name">Name *</label>
                                        <input type="text" name="id" class="form-control item-name" id="id" value="{{$category->id}}" hidden>
										<input type="text" name="name" class="form-control item-name" id="name" placeholder="Enter Name" value="{{$category->name}}">
									</div>
                                    <div class="col">
								
										<label for="slug">Slug *</label>
										<input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="{{$category->slug}}">
									</div>
                                </div>
                                <div class=" row form-group">
                                    <div class="col">
										<label for="meta_keywords">Meta Keywords
											</label>
								
                        
                        <input type="text" name="meta_keywords" class="tags" id="meta_keywords" placeholder="Enter Meta Keywords" value="">
									</div>

                                    <div class="col">
										<label for="meta_description">Meta Description
											</label>
										<textarea name="meta_descriptions" id="meta_descriptions" class="form-control" rows="5" placeholder="Enter Meta Description">
                                            {{$category->meta_description}}
                                        </textarea>
									</div>
                                </div>
									<div class=" row form-group">
                                        <div class="col">
										<label for="serial">Serial </label>
										<input type="number" name="serial" class="form-control" id="serial" placeholder="Enter Serial Number" value="5">
                                    </div>
                                        <div class="col">
                                           
                                      
										<label for="name">Current Image *</label>
										<br>
											<img class="admin-img" src="/uploads/{{$category->photo}}"  alt="No Image Found">
                                        <br>
										<span class="mt-1">Image Size Should Be 60 x 60.</span>
                                        <label class="file">
                                            <input type="file" accept="image/*" class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                            <span class="file-custom text-left">Upload Image...</span>
                                        </label>
                                </div>
                                    </div>

									<div class="form-group">
										<button type="submit" class="btn btn-secondary ">Submit</button>
									</div>
									<div>
								
						</div></form>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

				</div>





@stop
