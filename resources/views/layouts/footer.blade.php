
<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
            <div class="announcement-with-content">
            <div class="left-area">
                <img src="assets/images/1638791990Untitled-1.jpg" alt="">
            </div>
            <div class="right-area">
                <h3 class="">Get 50% Discount.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, facere nesciunt doloremque nobis debitis sint?</p>
                <form class="subscriber-form" >
                    <input type="hidden" name="_token" value="jhuKHsWUbrGg4b66oTz03vorQlvzqkd3R7p6RTYr">                    <div class="input-group">
                        <input class="form-control" type="email" name="email" placeholder="Your e-mail">
                        <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                    <div aria-hidden="true">
                        <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                    </div>

                    <button class="btn btn-primary btn-block mt-2" type="submit">
                        <span>Subscribe</span>
                    </button>
                </form>
            </div>
        </div>


</div>
<!--    announcement banner section end   -->

<!-- Site Footer-->
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <!-- Contact Info-->
          <section class="widget widget-light-skin">
            <h3 class="widget-title">Get In Touch</h3>
            <p class="mb-1"><strong>Address: </strong> unitech building opposite unipro plaza</p>
            <p class="mb-1"><strong>Phone: </strong> 0718360109</p>
            <p class="mb-3"><strong>Email: </strong> unitech@gmail.com</p>
            <ul class="list-unstyled text-sm">
              <li><span class=""><strong>Monday-Friday: </strong></span>9:27 PM - 9:27 PM</li>
              <li><span class=""><strong>Saturday: </strong></span>9:27 PM - 9:27 PM</li>
            </ul>
                        <div class="footer-social-links">
                                <a href="https://www.facebook.com/"><span><i class="fab fa-facebook-f"></i></span></a>
                                <a href="https://www.twitter.com/"><span><i class="fab fa-twitter"></i></span></a>
                                <a href="https://www.youtube.com/"><span><i class="fab fa-youtube"></i></span></a>
                                <a href="https://www.linkedin.com/"><span><i class="fab fa-linkedin-in"></i></span></a>
                            </div>
          </section>
        </div>
        <div class="col-lg-4 col-sm-6">
          <!-- Customer Info-->
          <div class="widget widget-links widget-light-skin">
            <h3 class="widget-title">Usefull Links</h3>
            <ul>
                                <li>
                    <a class="" href="faq.html">Faq</a>
                </li>
                                                <li><a href="/about-us">About Us</a></li>

                                <li><a href="/privacy-policy">Privacy Policy</a></li>

                                <li><a href="/terms-and-service">Terms &amp; Service</a></li>

                                <li><a href="/return-policy">Return Policy</a></li>

                                <li><a href="/How-It-Works">How It Works</a></li>


            </ul>
          </div>
        </div>
        <div class="col-lg-4">
            <!-- Subscription-->
            <section class="widget">
              <h3 class="widget-title">Newsletter</h3>
              <form class="row subscriber-form" >
                <input type="hidden" name="_token" value="jhuKHsWUbrGg4b66oTz03vorQlvzqkd3R7p6RTYr">                <div class="col-sm-12">
                  <div class="input-group">
                    <input class="form-control" type="email" name="email" placeholder="Your e-mail">
                    <span class="input-group-addon"><i class="icon-mail"></i></span> </div>
                  <div aria-hidden="true">
                    <input type="hidden" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>

                </div>
                <div class="col-sm-12">
                  <button class="btn btn-primary btn-block mt-2" type="submit">
                      <span>Subscribe</span>
                  </button>
                </div>
                <div class="col-lg-12">
                    <p class="text-sm opacity-80 pt-2">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</p>
                </div>
              </form>
              <div class="pt-3"><img class="d-block gateway_image" src="assets/images/16305963101621960148credit-cards-footer.png"></div>
            </section>
          </div>
      </div>
      <!-- Copyright-->
      <p class="footer-copyright"> OmniMart © All rights reserved.</p>
    </div>
  </footer>

<!-- Back To Top Button-->
<a class="scroll-to-top-btn" href="#">
    <i class="icon-chevron-up"></i>
</a>

<div class="color-picker">
    <span class="spiner"><i class="fas fa-cog fa-spin"></i></span>
    <a href="javascript:;" class="color__check " style="background: #003366;" data-href="FF6A00"></a>
    <a href="javascript:;" class="color__check " style="background: #ff4719;" data-href="ff4719"></a>
    <a href="javascript:;" class="color__check " style="background: #03a9f4;" data-href="03a9f4"></a>
    <a href="javascript:;" class="color__check " style="background: #A120CB;" data-href="A120CB"></a>
    <a href="javascript:;" class="color__check " style="background: #12A05C;" data-href="12A05C"></a>
    <a href="javascript:;" class="color__check " style="background: #000;" data-href="000"></a>
</div>

<!-- Backdrop-->
<div class="site-backdrop"></div>

<!-- Cookie alert dialog  -->
<div class="js-cookie-consent cookie-consent">

    <div class="container">
        <div class="cookie-container">
          <span class="cookie-consent__message">
            Your experience on this site will be improved by allowing cookies.
          </span>

          <button class="btn btn-info js-cookie-consent-agree cookie-consent__agree">
              Allow Cookies
          </button>
        </div>
      </div>

</div>
    <script>

        window.laravelCookieConsent = (function () {

            const COOKIE_VALUE = 1;
            const COOKIE_DOMAIN = 'geniusdevs.com';

            function consentWithCookies() {
                setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
                hideCookieDialog();
            }

            function cookieExists(name) {
                return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
            }

            function hideCookieDialog() {
                const dialogs = document.getElementsByClassName('js-cookie-consent');

                for (let i = 0; i < dialogs.length; ++i) {
                    dialogs[i].style.display = 'none';
                }
            }

            function setCookie(name, value, expirationInDays) {
                const date = new Date();
                date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + value
                    + ';expires=' + date.toUTCString()
                    + ';domain=' + COOKIE_DOMAIN
                    + ';path=/'
                    + '';
            }

            if (cookieExists('laravel_cookie_consent')) {
                hideCookieDialog();
            }

            const buttons = document.getElementsByClassName('js-cookie-consent-agree');

            for (let i = 0; i < buttons.length; ++i) {
                buttons[i].addEventListener('click', consentWithCookies);
            }

            return {
                consentWithCookies: consentWithCookies,
                hideCookieDialog: hideCookieDialog
            };
        })();
    </script>


<!-- Cookie alert dialog  -->



<script>
    var mainbs = {"is_announcement":"1","announcement_delay":"1.00","overlay":null};
    var decimal_separator = '.';
    var thousand_separator = ',';
</script>

<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->




<script>

//Comparecount();
</script>

{{-- <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/front/js/extraindex.js"></script>


     --}}


<script type="text/javascript">
    let mainurl = 'https://geniusdevs.com/codecanyon/omnimart40';

    $(document).on('click','.color__check',function(){
        var color = $(this).attr('data-href');

        $.get(`${mainurl}/set/color?color=${color}`,function(){
          location.reload();
        });
    })
    $(document).on('click','.spiner',function(){
        $('.color-picker').toggleClass('active');
    })

    let view_extra_index = 0;
      // Notifications
      function SuccessNotification(title){
            $.notify({
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-check-circle'
                },{
                element: 'body',
                position: null,
                type: "success",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }

        function DangerNotification(title){
            $.notify({
                // options
                title: ` <strong>${title}</strong>`,
                message: '',
                icon: 'fas fa-exclamation-triangle'
                },{
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 5000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class'
            });
        }
        // Notifications Ends



              // category wise product 
              catshow();
              function catshow(){
              
            
                var cat = document.getElementById("foo").getElementsByClassName("category_get active")[0];

let geturl = $(cat).attr('data-href');
let view = $(cat).attr('data-target');

console.log(geturl);

$.get(geturl, function (response) {
    $('#' + view).html(response);
    $('.' + view).addClass('d-none');

    if (response.data === undefined) {
        $('.' + view + '_not_found').removeClass('d-none');
    } else {
        $('.' + view + '_not_found').addClass('d-none');
    }

});
              }

          
              popshow();
              function popshow(){
              
            
              var cat = document.getElementById("pop").getElementsByClassName("category_get active")[0];

let geturl = $(cat).attr('data-href');
let view = $(cat).attr('data-target');

console.log(geturl);

$.get(geturl, function (response) {
  $('#' + view).html(response);
  $('.' + view).addClass('d-none');

  if (response.data === undefined) {
      $('.' + view + '_not_found').removeClass('d-none');
  } else {
      $('.' + view + '_not_found').addClass('d-none');
  }

});
            }
            proshow();
            function proshow(){
              
            
              var cat = document.getElementById("pro").getElementsByClassName("product_get active")[0];

let geturl = $(cat).attr('data-href');
let view = $(cat).attr('data-target');

console.log(geturl);

$.get(geturl, function (response) {
  $('#' + view).html(response);
  $('.' + view).addClass('d-none');

  if (response.data === undefined) {
      $('.' + view + '_not_found').removeClass('d-none');
  } else {
      $('.' + view + '_not_found').addClass('d-none');
  }

});
            }

      
    </script>
