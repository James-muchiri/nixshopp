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
                <h3 class="text-center">Admin Reset Password </h3>
                <div class="login-form">

                    <form id="adminlogin" >

                   @csrf

                        <div class="form-group form-floating-label">
                            <input id="username" name="email" type="email" class="form-control input-border-bottom" value="admin@gmail.com">
                            <label for="username" class="placeholder">Email Address</label>
                        </div>
                      

                        <div class="row justify-content-center form-sub m-0">
                            <a href="/admin/login" class="link float-right">Back to login</a>
                        </div>

                        <div class="form-action mb-3">
                            <button type="submit" class="btn btn-secondary  btn-login">Reset Password</button>
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

        <script>
            var basePath = '{{ env("APP_URL") }}';

        </script>

        <script>
            $(document).ready(function(e) {
                // Submit form data via Ajax
                $("#adminlogin").on('submit', function(e) {
                    e.preventDefault();


                    next_fs = $('#adminlogin');

                    curInputs = next_fs.find("input[type='text']");
                    isValid = true;
                    console.log(curInputs);
                    for (var i = 0; i < curInputs.length; i++) {
                        //  console.log(curInputs[i].value);
                        if (!curInputs[i].value) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                            //   console.log(curInputs[i].value);
                        }
                    }
                    if (isValid) {

                        var formData = new FormData($(this)[0]);
                        formData.append("_token", "{{ csrf_token() }}");

                        let loader = `
                    <div id="view_loader_div" class="">
                    <div class="product-not-found">
                      <img class="loader_image" src="/images/preloader.gif" alt="">
                    </div>
                  </div>
                    `;
                        $('#adminlogin').html(loader);

                        // AJAX code to submit form.
                        $.ajax({
                            type: "POST",

                            url: "/admin/reset-password", //call  to store form data
                            data: formData
                            , dataType: 'json'
                            , contentType: false
                            , cache: false
                            , processData: false
                            , success: function(data) {
                                console.log(data);

                                if (data.status == 200) {
                                    toastr.success('Login success');
                                    //$("#userlogin").reset();





                                    setInterval(function() {
                                        to_login_page();
                                    }, 1500);
                                }
                                else{

                                        let loader = `
                   <div class="form-group form-floating-label">
                            <input id="username" name="email" type="email" class="form-control input-border-bottom" value="admin@gmail.com">
                            <label for="username" class="placeholder">Email Address</label>
                        </div>
                        <div class="form-group form-floating-label">
                            <input id="password" name="password" type="password" class="form-control input-border-bottom" value="password">
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
                    `;
                        $('#adminlogin').html(loader);

     toastr.error('Login failed');

                                }




                            }
                            , error: function(xhr) {
                                console.log(xhr.responseText)
                            },

                        });

                    }
                });

            });
            

            function to_login_page() {

                var basePath = '{{ env('
                APP_URL ') }}';


                var rlink = "/admin";


                console.log(basePath);
                window.location.href = basePath + rlink;
            }

        </script>


</body></html>
