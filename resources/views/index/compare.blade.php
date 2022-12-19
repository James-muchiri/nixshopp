@extends('layouts.index')

@section('content')


<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="https://geniusdevs.com/codecanyon/omnimart40">Home</a> </li>
                <li class="separator"></li>
                <li>Compare Products</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1">
        <div class="card">
            <div class="card-body">
                <div class="comparison-table">
                    <table class="table table-bordered">

                      <tbody>
                                                    <tr>
                              <td class="text-center"><strong>Product not found</strong></td>
                          </tr>
                                                 </tbody>



                    </table>
                  </div>
            </div>
        </div>
  </div>

<!--    announcement banner section start   -->
<a class="announcement-banner" href="#announcement-modal"></a>
<div id="announcement-modal" class="mfp-hide white-popup">
            <div class="announcement-with-content">
            <div class="left-area">
                <img src="../assets/images/1638791990Untitled-1.jpg" alt="">
            </div>
            <div class="right-area">
                <h3 class="">Get 50% Discount.</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, facere nesciunt doloremque nobis debitis sint?</p>
                <form class="subscriber-form" action="https://geniusdevs.com/codecanyon/omnimart40/subscriber/submit" method="post">
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


@stop
