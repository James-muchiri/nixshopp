

@extends('admin.layouts.index')

@section('content')



<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Create Child Category</b>
                </h3>
                <a class="btn btn-primary btn-sm" href="/admin/childcategory"><i class="fas fa-chevron-left"></i> Back</a>
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
								<form class="admin-form" id="store_childcategory_form" >

                                   @csrf
									<div class="form-group">
										<label for="childcategory_id">Select Category *</label>
										<select name="childcategory_id" id="childcategory_id" class="form-control">
											<option value="" selected="" disabled="">Select One</option>
											@foreach ($category as $cat)
											<option value="{{$cat->id}}">{{ $cat->name }}</option>
											@endforeach
											
																					</select>
									</div>

									<div class="form-group">
										<label for="childsubcategory_id">Select subcategory *</label>
										<select name="childsubcategory_id" id="childsubcategory_id" class="form-control">
											<option value="">Select One</option>
										</select>
									</div>

									<div class="form-group">
										<label for="name">Name *</label>
										<input type="text" name="name" class="form-control item-name" id="name" placeholder="Enter Name" value="">
									</div>

									<div class="form-group">
										<label for="slug">Slug *</label>
										<input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="">
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

































