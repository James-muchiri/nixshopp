@extends('layouts.index')

@section('content')


<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a> </li>
                <li class="separator"></li>
                <li>Shop</li>
              </ul>
          </div>
      </div>
    </div>
  </div>

  
<div class="container padding-bottom-3x mb-1">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-top-filter-wrapper">
                <div class="row">
                    <div class="col-md-10 gd-text-sm-center">
                        <div class="sptfl">
                            <div class="quickFilter">
                                <h4 class="quickFilter-title"><i class="fa fa-filter"></i>Quick filter</h4>
                                <ul id="quick_filter">
                                    <li><a datahref=""><i class="icon-chevron-right pr-2"></i>All products </a></li>
                                    <li class=""><a href="javascript:;" data-href="feature"><i class="icon-chevron-right pr-2"></i>Featured products </a></li>
                                    <li class=""><a href="javascript:;" data-href="best"><i class="icon-chevron-right pr-2"></i>Best sellers </a></li>
                                    <li class=""><a href="javascript:;" data-href="top"><i class="icon-chevron-right pr-2"></i>Top rated </a></li>
                                    <li class=""><a href="javascript:;" data-href="new"><i class="icon-chevron-right pr-2"></i>New Arrival </a></li>
                                </ul>
                            </div>
                            <div class="shop-sorting">
                                <label for="sorting">Sort by:</label>
                                <select class="form-control" id="sorting">
                                <option value="">All Products</option>
                                <option value="low_to_high">Low - High Price</option>
                                <option value="high_to_low">High - Low Price</option>
                                </select><span class="text-muted">Showing:</span><span>1 - 16 items</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 gd-text-sm-center">
                        <div class="shop-view">
                          <a class="list-view active " data-step="grid" href="javascript:;" ><i class="fa fa-th-large"></i></a>
                            <a class="list-view " href="javascript:;" data-step="list" ><i class="fa fa-list"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3">

      <div class="col-lg-9 order-lg-2" id="list_view_ajax"><!-- Shop Toolbar-->
    
    <div class="row g-3" id="main_div">
        @if ($products)
        @foreach ($products as $product)
        <div class="col-xxl-3 col-md-4 col-6">
         <div class="product-card ">
             @switch($product->type)
             @case("top_products")
             <div class="product-badge bg-success">{{$product->type}}  </div> 
                 @break
          
             @case("featured")
             <div class="product-badge bg-warning">{{$product->type}}  </div> 
                 @break

                 @case("new_arrival")
                 <div class="product-badge bg-info">{{$product->type}}  </div> 
                 @break

                 @case("best_products")
                 <div class="product-badge bg-dark">{{$product->type}}  </div> 
                 @break

          
             @default
      
         @endswitch
             
                                
@php
if($product->c_price < $product->p_price){
 $per = ($product->c_price - $product->p_price) / $product->p_price * 100;
 $num = round($per);
echo  '<div class="product-badge product-badge2 bg-info"> '.$num.'%</div>';
}
@endphp
                                 <div class="product-thumb">
                                     <img class="lazy" data-src="{{ asset('uploads') }}/{{$product->image}}" alt="Product">
                                     <div class="product-button-group">
                                         <a class="product-button wishlist_store" href="user/storewishlists/{{$product->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                                         <a data-target="/compare/product/{{$product->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                                         <a class="product-button add_to_single_cart" data-target="/cart/product/{{$product->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
                 </a>
                 </div>
         </div>
         <div class="product-card-body">

             <div class="product-category"><a href="catalog2e44.html?category=men-clothing">{{$product->child__categories_name}}</a></div>
             <h3 class="product-title"><a href="product/sxJShirts-Menshirts-Mens-Cotton-Shirt-Factory-Direct-Various-Style-CustomizationTf.html">
                 {{$product->name}}
             </a></h3>
             <div class="rating-stars">
                 <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
             </div>
             

             <h4 class="product-price">
                 <del>Ksh {{$product->p_price}}</del>

                 Ksh {{$product->c_price}}
</h4>

         </div>

         </div>
     </div>
        @endforeach  
        @else
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="h4 mb-0">No Product Found</h4>
                </div>
            </div>
        </div>
        @endif
                                                      
         
                  

         
                         
                                                    </div>


    <!-- Pagination-->
    <div class="row mt-15" id="item_pagination">
        <div class="col-lg-12 text-center">
            
        </div>
    </div>

    <script type="text/javascript" src="/front/js/catalog.js"></script>



</div>

      <!-- Sidebar          -->
      <div class="col-lg-3 order-lg-1">
        <div class="sidebar-toggle position-left"><i class="icon-filter"></i></div>
        <aside class="sidebar sidebar-offcanvas position-left"><span class="sidebar-close"><i class="icon-x"></i></span>
          <!-- Widget Categories-->
          <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Shop Categories</h3>
            <ul id="category_list" class="category-scroll">
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="Women-Clothing">Women Clothing</a>

                    <ul id="subcategory_list">
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Womens-Underwear">Women's Underwear</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Pajama-Sets">Pajama Sets</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Women-Socks--Hosiery">Women Socks &amp; Hosiery</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Shapewer">Shapewer</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Bras">Bras</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Weddings--Events">Weddings &amp; Events</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Wedding-Dresses">Wedding Dresses</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Prom-Dresses">Prom Dresses</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Evening-Dresses">Evening Dresses</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Costumes">Costumes</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Bottoms">Bottoms</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Leggings">Leggings</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Skirt">Skirt</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Jeans">Jeans</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Pants--Capris">Pants &amp; Capris</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Womens-Fashion">Women's Fashion</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Accessories">Accessories</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                </ul>
                  </li>
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="men-clothing">Men Clothing</a>

                    <ul id="subcategory_list">
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Outerwear--Jackets">Outerwear &amp; Jackets</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Jackets">Jackets</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Sweaters">Sweaters</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Parkas">Parkas</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Down-Jackets">Down Jackets</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Suits--Blazers">Suits &amp; Blazers</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Shirt">Shirt</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Bottoms">Bottoms</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Underwear">Underwear</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Boxers">Boxers</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Briefs">Briefs</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Long-Johns">Long Johns</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Sleep--Lounge">Sleep &amp; Lounge</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Pajama-Sets">Pajama Sets</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Accessories">Accessories</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                </ul>
                  </li>
                                    <li class="has-children active">
                  <a class="category_search" href="javascript:;" data-href="Electronics">Electronics</a>

                    <ul id="subcategory_list">
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Mobile-Phones">Mobile Phones</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Cellphones">Cellphones</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="iPhones">iPhones</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Android-Phone">Android Phone</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Mobile-Phone-Accessories">Mobile Phone Accessories</a>

                          <ul id="childcategory_list">
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Phone-Bags--Cases">Phone Bags &amp; Cases</a>

                            </li>
                                                            <li class="">
                              <a class="childcategory" href="javascript:;" data-href="Mobile-Phone-Cables">Mobile Phone Cables</a>

                            </li>
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Laptop">Laptop</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Computer">Computer</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Featured-Accessories">Featured Accessories</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="DSLR">DSLR</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                </ul>
                  </li>
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="Vehicles--Accessories">Vehicles &amp; Accessories</a>

                    <ul id="subcategory_list">
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Bike">Bike</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Car">Car</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                </ul>
                  </li>
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="Beauty--Personal-Care">Beauty &amp; Personal Care</a>

                    <ul id="subcategory_list">
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Hair-Weaves">Hair Weaves</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Makeup">Makeup</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Nail-Art--Tools">Nail Art &amp; Tools</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Skin-Care">Skin Care</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                    <li class="">
                          <a class="subcategory" href="javascript:;" data-href="Personal-Care">Personal Care</a>

                          <ul id="childcategory_list">
                                                        </ul>
                        </li>
                                                </ul>
                  </li>
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="Sports--Entertainment">Sports &amp; Entertainment</a>

                    <ul id="subcategory_list">
                                                </ul>
                  </li>
                                    <li class="has-children">
                  <a class="category_search" href="javascript:;" data-href="Home--Garden">Home &amp; Garden</a>

                    <ul id="subcategory_list">
                                                </ul>
                  </li>
                                </ul>
          </section>

                             {{-- <!-- Widget Price Range-->
          <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Filter by Price</h3>
            <form class="price-range-slider" method="post" data-start-min="0" data-start-max="10000" data-min="0" data-max="10000" data-step="5">
              <div class="ui-range-slider noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
              <footer class="ui-range-slider-footer">
                <div class="column">
                  <button class="btn btn-primary btn-sm" id="price_filter" type="button"><span>Filter</span></button>
                </div>
                <div class="column">
                  <div class="ui-range-values">
                    <div class="ui-range-value-min">$<span class="min_price">0</span>
                      <input type="hidden" value="0">
                    </div>-
                    <div class="ui-range-value-max">$<span class="max_price">10000</span>
                      <input type="hidden" value="10000">
                    </div>
                  </div>
                </div>
              </footer>
            </form>
          </section> --}}
          
                                      {{-- <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Filter by Color</h3>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="Red" id="3Red">
                <label class="custom-control-label" for="3Red">Red<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="Blue" id="3Blue">
                <label class="custom-control-label" for="3Blue">Blue<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="Black" id="3Black">
                <label class="custom-control-label" for="3Black">Black<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="Pink" id="3Pink">
                <label class="custom-control-label" for="3Pink">Pink<span class="text-muted"></span></label>
            </div>
                          </section> --}}
                        {{-- <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Filter by Size</h3>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="M" id="57M">
                <label class="custom-control-label" for="57M">M<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="L" id="57L">
                <label class="custom-control-label" for="57L">L<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="XL" id="57XL">
                <label class="custom-control-label" for="57XL">XL<span class="text-muted"></span></label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input option" type="checkbox" value="XXL" id="57XXL">
                <label class="custom-control-label" for="57XXL">XXL<span class="text-muted"></span></label>
            </div>
                          </section> --}}
                        {{-- <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Filter by test</h3>
                          </section> --}}
                        
          <!-- Widget Brand Filter-->
          <section class="widget widget-categories card rounded p-4">
            <h3 class="widget-title">Filter by Brand</h3>
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input brand-select" type="checkbox" value="" id="all-brand">
              <label class="custom-control-label" for="all-brand">All Brands</label>
            </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Adidas" id="Adidas">
                <label class="custom-control-label" for="Adidas">Adidas</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Lavie" id="Lavie">
                <label class="custom-control-label" for="Lavie">Lavie</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Skyart" id="Skyart">
                <label class="custom-control-label" for="Skyart">Skyart</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Nike" id="Nike">
                <label class="custom-control-label" for="Nike">Nike</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Samsung" id="Samsung">
                <label class="custom-control-label" for="Samsung">Samsung</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Yamaha" id="Yamaha">
                <label class="custom-control-label" for="Yamaha">Yamaha</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="HM" id="HM">
                <label class="custom-control-label" for="HM">H.M</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Loreal" id="Loreal">
                <label class="custom-control-label" for="Loreal">Loreal</label>
              </div>
                            <div class="custom-control custom-checkbox">
                <input class="custom-control-input brand-select" type="checkbox" value="Ascis" id="Ascis">
                <label class="custom-control-label" for="Ascis">Ascis</label>
              </div>
                          </section>


        </aside>
      </div>
    </div>
  </div>




  <form id="search_form" class="d-none" action="/filter" method="GET">

    <input type="text" name="maxPrice" id="maxPrice" value="">
    <input type="text" name="minPrice" id="minPrice" value="">
    <input type="text" name="brand" id="brand" value="">
    <input type="text" name="brand" id="brand" value="">
    <input type="text" name="category" id="category" value="">
    <input type="text" name="quick_filter" id="quick_filter" value="">
    <input type="text" name="childcategory" id="childcategory" value="">
    <input type="text" name="page" id="page" value="">
    <input type="text" name="attribute" id="attribute" value="">
    <input type="text" name="option" id="option" value="">
    <input type="text" name="subcategory" id="subcategory" value="">
    <input type="text" name="sorting" id="sorting" value="">
    <input type="text" name="view_check" id="view_check" value="">


    <button type="submit" id="search_button" class="d-none"></button>
</form>




@stop