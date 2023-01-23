


@extends('layouts.index')

@section('content')




<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a>
                </li>
                <li class="separator"></li>
                <li><a href="/campaign/products">Campaign Products</a>
                </li>
              </ul>
          </div>
      </div>
    </div>
  </div>



  <div class="deal-of-day-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 class="h3">Deals Of The Week</h2>
                    <div class="right-area">
                            <div class="countdown countdown-alt" data-date-time="10/10/2022"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
         
@foreach ($deals as $deal)
    
                            <div class="col-gd">
            <div class="product-card">
                <div class="product-thumb">

                                                    @switch($deal->type)
                                                    @case("top_products")
                                                    <div class="product-badge bg-success">{{$deal->type}}  </div> 
                                                        @break
                                                 
                                                    @case("featured")
                                                    <div class="product-badge bg-warning">{{$deal->type}}  </div> 
                                                        @break

                                                        @case("new_arrival")
                                                        <div class="product-badge bg-info">{{$deal->type}}  </div> 
                                                        @break

                                                        @case("best_products")
                                                        <div class="product-badge bg-dark">{{$deal->type}}  </div> 
                                                        @break

                                                 
                                                    @default
                                             
                                                @endswitch



                    <img src="{{ asset('/uploads') }}/{{$deal->image}}" alt="Product">
                    <div class="product-button-group">
                        <a class="product-button wishlist_store" href="user/storewishlists/{{$deal->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                        <a data-target="/compare/product/{{$deal->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                        <a class="product-button add_to_single_cart" data-target="/cart/product/{{$deal->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
        </a>
                        </div>
                </div>
                <div class="product-card-body">

                    <div class="product-category"><a href="/shop?category=men-clothing">{{$deal->child__categories_name}}</a></div>
                    <h3 class="product-title"><a href="product/sxJShirts-Menshirts-Mens-Cotton-Shirt-Factory-Direct-Various-Style-CustomizationTf.html">
                        {{$deal->name}}
                    </a></h3>
                    <div class="rating-stars">
                        <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
                    </div>
                    
    
                    <h4 class="product-price">
                        <del>Ksh {{$deal->p_price}}</del>
    
                        Ksh {{$deal->c_price}}
    </h4>
    
                </div>

            </div>
        </div>

        @endforeach

                        </div>
    </div>
</div>











@stop