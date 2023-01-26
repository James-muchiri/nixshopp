@extends('layouts.index')

@section('content')

<!-- Page Content-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="">Home</a> </li>
                    <li class="separator"></li>
                    <li>Login/Register</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container padding-bottom-3x mb-1">
    <div class="row">
        <div class="col-md-6">
            <form class="card" id="userlogin">

                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center">Login</h4>

                    <div class="form-group input-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" value=""><span class="input-group-addon"><i class="icon-mail"></i></span>
                    </div>

                    <div class="form-group input-group">
                        <input class="form-control" type="password" name="password" placeholder="Password"><span class="input-group-addon"><i class="icon-lock"></i></span>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember_me">
                            <label class="custom-control-label" for="remember_me">Remember me</label>
                        </div><a class="navi-link" href="/user/forgot">Forgot password?</a>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary margin-bottom-none" type="submit"><span>Login</span></button>
                    </div>
                    {{-- <div class="row">
                    <div class="col-lg-12 text-center mt-3">
                                        <a class="facebook-btn mr-2" href="/auth/facebook">Facebook login
                    </a>
                                                            <a class="google-btn" href="/auth/google"> Google login
                    </a>
                                      </div>
                  </div> --}}
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card register-area">
                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center">Register</h4>
                    <form class="row" id="user_register">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-fn">First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="First Name" id="reg-fn" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-ln">Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Last Name" id="reg-ln" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-email">E-mail Address</label>
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" id="reg-email" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Phone Number</label>
                                <input class="form-control" name="phone_no" type="text" placeholder="Phone Number" id="reg-phone" value="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" id="reg-pass">
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass-confirm">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" id="reg-pass-confirm">
                            </div>
                        </div>

                        {{-- <div class="col-lg-12 mb-4">
                  <script src="https://www.google.com/recaptcha/api.js?" async="" defer=""></script>

                  <div data-sitekey="6LcnPoEaAAAAAF6QhKPZ8V4744yiEnr41li3SYDn" class="g-recaptcha">
                    <div style="width: 304px; height: 78px;">
                      <div>
                        <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcnPoEaAAAAAF6QhKPZ8V4744yiEnr41li3SYDn&amp;co=aHR0cHM6Ly9nZW5pdXNkZXZzLmNvbTo0NDM.&amp;hl=en&amp;v=5qcenVbrhOy8zihcc2aHOWD4&amp;size=normal&amp;cb=l80zeb8dgvc8" width="304" height="78" role="presentation" name="a-1561iheouu8z" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe>
                      </div>
                                </div> --}}

                        <div class="col-12 text-center">
                            <button class="btn btn-primary margin-bottom-none" type="submit"><span>Register</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var basePath = '{{ env("APP_URL") }}';

</script>

<script>
    $(document).ready(function(e) {
        // Submit form data via Ajax
        $("#userlogin").on('submit', function(e) {
            e.preventDefault();


            next_fs = $('#userlogin');

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
                $('#userlogin').html(loader);

                // AJAX code to submit form.
                $.ajax({
                    type: "POST",

                    url: "/user/userlogin", //call  to store form data
                    data: formData
                    , dataType: 'json'
                    , contentType: false
                    , cache: false
                    , processData: false
                    , success: function(data) {
                        console.log(data.status);

                        if (data.status == 200) {
                            toastr.success('success');
                            //$("#userlogin").reset();





                            setInterval(function() {
                                to_login_page();
                            }, 1500);
                        }




                    }
                    , error: function(xhr) {
                        console.log(xhr.responseText)
                    },

                });

            }
        });

    });
    $(document).ready(function(e) {
        // Submit form data via Ajax
        $("#user_register").on('submit', function(e) {
            e.preventDefault();


            next_fs = $('#user_register');

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
                $('#user_register').html(loader);

                // AJAX code to submit form.
                $.ajax({
                    type: "POST",

                    url: "/user/user_register", //call  to store form data
                    data: formData
                    , dataType: 'json'
                    , contentType: false
                    , cache: false
                    , processData: false
                    , success: function(data) {
                        console.log(data.status);

                        if (data.status == 200) {
                            toastr.success('success');
                            $("#user_register").reset();


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


        var rlink = "/";


        console.log(basePath);
        window.location.href = basePath + rlink;
    }






</script>

@stop
