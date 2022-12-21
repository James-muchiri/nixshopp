@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Create Sub Category</b>
                </h3>
                <a class="btn btn-primary btn-sm" href="/admin/subcategory"><i class="fas fa-chevron-left"></i> Back</a>
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
							<form class="admin-form" id="store_subcategory_form"  enctype="multipart/form-data">
									@csrf
                                    
									<div class="form-group">
										<label for="category_id">Select Category *</label>
										<select name="category_id" id="category_id" class="form-control">
																						@foreach ($category as $cat)
																						<option value="{{$cat->id}}">{{ $cat->name }}</option>
																						@endforeach
																						
																					
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
