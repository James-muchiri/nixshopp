@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Send Email</b> </h3>
                <a class="btn btn-primary btn-sm" href="/admin/subscribers"><i class="fas fa-chevron-left"></i> Back</a>
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
								<form class="admin-form" action="/admin/subscribers/send-mail/submit" method="POST" enctype="multipart/form-data">

                               @csrf

									<div class="form-group">
										<label for="subject">Subject *</label>
										<input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Subject" value="">
									</div>

									<div class="form-group">
										<label for="details">Details *</label>
										<textarea name="details" id="details" class="form-control " rows="5" placeholder="Enter Details"></textarea>
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
