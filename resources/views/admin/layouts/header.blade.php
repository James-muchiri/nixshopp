
		<div class="main-header " >
			<!-- Logo Header -->
			<div class="logo-header">

				<a href="/admin" class="logo">
					<img src="/images/1634218044logoforsite.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize ">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item mr-4">
							<a class="btn btn-sm btn-primary py-1 text-white" title="website" href="/" target="_blank">
							<b> View Website</b>
							</a>
						</li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span  class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" id="display-notf" data-href=/admin/notifications>
                                <h6 class="dropdown-header">
    Notifications
</h6>
<a class="dropdown-item d-flex align-items-center" href="javascript:;">
    <div>
        No Notifications
    </div>
</a>
                            </div>
                        </li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="/admin" aria-expanded="false">
								<div class="avatar-sm avatar avatar-sm">
									<img src="{{ asset('images/1634491069HTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="{{ asset('images/1634491069HTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg') }}" alt="image profile" class="avatar-img rounded"></div>

										<div class="u-text">
											<h4>Admin</h4>
											<p class="text-muted">admin@gmail.com</p><a href="/admin/profile" class="btn  btn-secondary btn-sm">Update Profile</a>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/profile">Update Profile</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/password">Change Password</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="/admin/logout">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>