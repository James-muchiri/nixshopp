<html lang="en" class="wf-flaticon-n4-inactive wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-opensans-n3-active wf-opensans-n4-active wf-opensans-n6-active wf-opensans-n7-active wf-active"><head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OmniMart</title>
	<meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">
    <link rel="icon"  type="image/x-icon" href="{{ asset('images/1629651232pre.png') }}"/>
	<!-- Fonts and icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS Files -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/azzara.min.css') }}" rel="stylesheet">
</head>

<body class="login">

        
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <h3 class="text-center">Sign In To Admin</h3>
                <div class="login-form">

                    <form action="/admin/login-submit" method="POST">

                   @csrf
                        
                        <div class="form-group form-floating-label">
                            <input id="username" name="login_email" type="email" class="form-control input-border-bottom" value="admin@gmail.com">
                            <label for="username" class="placeholder">Email Address</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="login_password" type="password" class="form-control input-border-bottom" value="password">
                            <label for="password" class="placeholder">Password</label>
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>

                        <div class="row justify-content-center form-sub m-0">
                            <a href="/admin/forgot" class="link float-right">Forget Password ?</a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login">Sign In</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    
        <script src="{{ asset('backend/js/jquery.3.6.0.min.js') }}"></script>
        <script src="{{ asset('backend/js/plugin/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/ready.min.js') }}"></script>


</body></html>