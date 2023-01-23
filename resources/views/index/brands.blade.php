
@extends('layouts.index')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a> </li>
                    <li class="separator">&nbsp;</li>
                    <li>Brand</li>
                  </ul>
            </div>
        </div>
    </div>
  </div>



<div class="container pt-0 pb-5">
    <div class="row g-3">
        @foreach ($Brands as $Brand)
            
       
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-6">
                <a class="b-p-s-b" href="/brands/{{$Brand->id}}">
                    <img class="d-block hi-50" src="{{ asset('uploads') }}/{{$Brand->photo}}" alt="Lavie" title="{{$Brand->name}}">
                </a>
            </div>
            @endforeach
            
             
         
            
            </div>
  </div>










@stop