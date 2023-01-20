@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a> </li>
                <li class="separator"></li>
                <li>Track Order</li>
              </ul>
          </div>
      </div>
    </div>
  </div>



  <div class="container py-5">
    <div class="row justify-content-center py-5">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="form-control" type="text" id="order_number" name="order_number" placeholder="Order Number">
                        <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>
                    </div>
                </div>
                <div class="col-sm-3 mt-4 mt-sm-0">
                    <a class="btn btn-primary btn-block mt-0" id="submit_number" data-href="/order/track/submit" type="submit"><span>Track Now</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-lg-12">
            <div id="track-order">

            </div>
        </div>
    </div>
</div>
<script>

$(document).ready(function () {
    $('#submit_number').on('click', function (e) {
            var link = $(this).data('href') + '?order_number=' + $('#order_number').val();
            console.log(link);
            $('#track-order').load(link);
            return false;
        });
    });


</script>


@stop