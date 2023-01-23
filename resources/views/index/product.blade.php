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
                <li><a href="/shop">Shop</a>
                </li>
                <li class="separator"></li>
                <li>{{$product->name}}</li>
              </ul>
          </div>
      </div>
    </div>
</div>


<div class="container padding-bottom-1x mb-1">
    <div class="row">
      <!-- Poduct Gallery-->
      <div class="col-xxl-5 col-lg-6 col-md-6">
        <div class="product-gallery">
                        <div class="gallery-wrapper">
                <div class="gallery-item video-btn text-center">
                    <a href="https://www.youtube.com/watch?v=6ZVEAXmupEo" title="Watch video"></a>
                </div>
            </div>

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
         
        echo  '<div class="product-badge bg-goldenrod  ppp-t"> '.$num.'%</div>';
        }
        @endphp
                 
          
          <div class="product-thumbnails insize">
            <div class="product-details-slider owl-carousel owl-loaded owl-drag">
            
                        

            <div class="item" style="position: relative; overflow: hidden;">
   <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hdb695965a744470b958f17251d4d277ew.jpg" alt="zoom">
   <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hdb695965a744470b958f17251d4d277ew.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none;">
</div>
    <div class="item" style="position: relative; overflow: hidden;">
   
 <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt="zoom">
 <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hedf90cf6656546e7a8548d4980edc5bda.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none;">
</div>


    <div class="item" style="position: relative; overflow: hidden;">
     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134720Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt="zoom"><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134720Hedf90cf6656546e7a8548d4980edc5bda.jpg" class="zoomImg" style="position: absolute; top: -289.266px; left: -13.9677px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none;">
    </div>


    <div class="item" style="position: relative; overflow: hidden;">
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Haeebad0b0907432897c3ee27adc13ef48.jpg" alt="zoom">
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Haeebad0b0907432897c3ee27adc13ef48.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none;">
    </div>


    <div class="item" style="position: relative; overflow: hidden;">
 <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hdb695965a744470b958f17251d4d277ew.jpg" alt="zoom">
 <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hdb695965a744470b958f17251d4d277ew.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none;">
</div>


    <div class="item" style="position: relative; overflow: hidden;">
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt="zoom">
        <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634490619Hedf90cf6656546e7a8548d4980edc5bda.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1000px; height: 1000px; border: none; max-width: none;">
    </div>

</div>
      </div>
        </div>
      </div>

                <!-- Product Info-->
        <div class="col-xxl-7 col-lg-6 col-md-6">
            <div class="details-page-top-right-content d-flex align-items-center">
                <div class="div w-100">
                    <input type="hidden" id="item_id" value="563">
                    <input type="hidden" id="demo_price" value="1352.81">
                    <input type="hidden" value="$" id="set_currency">
                    <input type="hidden" value="1" id="set_currency_val">
                    <input type="hidden" value="1" id="currency_direction">
                    <h4 class="mb-2 p-title-main">{{$product->name}}</h4>
                    <div class="mb-3">
                        <div class="rating-stars d-inline-block gmr-3">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div>
                                                    <span class="text-success  d-inline-block">In Stock</span>
                                            </div>


                    
                    <span class="h3 d-block price-area">
                                            <small class="d-inline-block"><del>{{$product->p_price}}</del></small>
                                        <span id="main_price" class="main-price">{{$product->c_price}}</span>
                    </span>

                    <p class="text-muted"> {{$product->short}}. <a href="#details" class="scroll-to">Read more</a></p>

                    <div class="row margin-top-1x">
                                                                            <div class="col-sm-6">
                                <div class="form-group">
                                <label for="Color">Color</label>
                                <select class="form-control attribute_option" id="Color">
                                                                        <option value="Red" data-type="30" data-href="333" data-target="5">Red</option>
                                                                        <option value="Blue" data-type="30" data-href="334" data-target="6">Blue</option>
                                                                        <option value="Black" data-type="30" data-href="335" data-target="7">Black</option>
                                                                        <option value="Pink" data-type="30" data-href="336" data-target="8">Pink</option>
                                                                      </select>
                                </div>
                            </div>
                                                                                                        <div class="col-sm-6">
                                <div class="form-group">
                                <label for="Size">Size</label>
                                <select class="form-control attribute_option" id="Size">
                                                                        <option value="M" data-type="84" data-href="1110" data-target="5">M</option>
                                                                        <option value="L" data-type="84" data-href="1156" data-target="6">L</option>
                                                                        <option value="XL" data-type="84" data-href="1202" data-target="7">XL</option>
                                                                        <option value="XXL" data-type="84" data-href="1248" data-target="7">XXL</option>
                                                                      </select>
                                </div>
                            </div>
                                                                        </div>
                    <div class="row align-items-end pb-4">
                        <div class="col-sm-12">
                                                        <div class="qtySelector product-quantity">
                              <span class="decreaseQty subclick"><i class="fa fa-minus "></i></span>
                              <input type="text" class="qtyValue cart-amount" value="1">
                              <span class="increaseQty addclick"><i class="fa fa-plus"></i></span>
                                <input type="hidden" value="3333" id="current_stock">
                            </div>
                                                        <div class="p-action-button">
                                                                                              <button class="btn btn-primary m-0 a-t-c-mr" id="add_to_cart"><i class="icon-bag"></i><span>Add to Cart</span></button>
                                <button class="btn btn-primary m-0" id="but_to_cart"><i class="icon-bag"></i><span>Buy Now</span></button>
                                                              
                            </div>

                        </div>
                    </div>

                    <div class="div">
                        <div class="t-c-b-area">
                            
                                <div class="pt-1 mb-1"><span class="text-medium">Categories:</span>
                                    <a href="/shop?category={{$product->categories_id}}">{{$product->child__categories_name}}</a>
                                                                                /
                                                                            <a href="/shop?subcategory={{$product->sub__categories_id}}">{{$product->sub__categories_name}}</a>
                                                                                /
                                                                            <a href="/shop?childcategory={{$product->child__categories_id}}">{{$product->child__categories_name}}</a>
                                </div>
                                <div class="pt-1 mb-1"><span class="text-medium">Tags:</span>
                                                                                                                                                <a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?tag=women">women</a>,
                                                                                                                                                <a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?tag=dresses">dresses</a>
                                                                                                                                            </div>
                                                                <div class="pt-1 mb-4"><span class="text-medium">SKU:</span> {{$product->sku}}</div>
                                                        </div>

                        <div class="mt-4 p-d-f-area">
                            <div class="left">
                                <a class="btn btn-primary btn-sm wishlist_store wishlist_text" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/563"><span><i class="icon-heart"></i></span>
                                                                <span class="wishlist1">Wishlist</span>
                                <span class="wishlist2 d-none">Added To Wishlist</span>
                                                                </a>
                                <button class="btn btn-primary btn-sm  product_compare" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/563"><span><i class="icon-repeat"></i>Compare</span></button>
                            </div>

                            <div class="d-flex align-items-center">
                                <span class="text-muted mr-1">Share: </span>
                                <div class="d-inline-block a2a_kit" style="line-height: 16px;">
                                    <a class="facebook  a2a_button_facebook" href="/#facebook" target="_blank" rel="nofollow noopener">
                                        <span><i class="fa fa-facebook-f"></i></span>
                                    </a>
                                    <a class="twitter  a2a_button_twitter" href="/#twitter" target="_blank" rel="nofollow noopener">
                                        <span><i class="fa fa-twitter"></i></span>
                                    </a>
                                    <a class="linkedin  a2a_button_linkedin" href="/#linkedin" target="_blank" rel="nofollow noopener">
                                        <span><i class="fa fa-linkedin-in"></i></span>
                                    </a>
                                    <a class="pinterest   a2a_button_pinterest" href="/#pinterest" target="_blank" rel="nofollow noopener">
                                        <span><i class="fa fa-pinterest"></i></span>
                                    </a>
                                </div>
                                <script async="" src="https://static.addtoany.com/menu/page.js"></script>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" padding-top-3x mb-3" id="details">
            <div class="col-lg-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Descriptions</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">Specifications</a>
                </li>
            </ul>
            <div class="tab-content card">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab" "="">
              @php
                  echo $product->description;
              @endphp     
                </div>
                <div class="tab-pane fade show" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                <div class="comparison-table">
                    <table class="table table-bordered">
                        <thead class="bg-secondary">
                        </thead>
                        <tbody>
                        <tr class="bg-secondary">
                            <th class="text-uppercase">Specifications</th>
                            <td><span class="text-medium">Descriptions</span></td>
                        </tr>
                                                                        <tr>
                            <th>Product Type:</th>
                            <td>Velvet elegant sleeveless evening dress</td>
                        </tr>
                                                <tr>
                            <th>Material:</th>
                            <td>Polyester / Spandex</td>
                        </tr>
                                                <tr>
                            <th>Lining Material:</th>
                            <td>Polyester</td>
                        </tr>
                                                <tr>
                            <th>Faric Type:</th>
                            <td>Fleece</td>
                        </tr>
                                                <tr>
                            <th>Technics:</th>
                            <td>Plain dyed</td>
                        </tr>
                                                <tr>
                            <th>Decoration:</th>
                            <td>Sequins</td>
                        </tr>
                                                <tr>
                            <th>Size:</th>
                            <td>S/M/L</td>
                        </tr>
                                                                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>


<div class="container  review-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2 class="h3">Latest Reviews</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
                            <div class="card p-5">
                No Review
              </div>
                            <div class="row mt-15">
                <div class="col-lg-12 text-center">
                    
                </div>
            </div>

          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="text-center">
                  <div class="d-inline align-baseline display-3 mr-1">0</div>
                  <div class="d-inline align-baseline text-sm text-warning mr-1">
                    <div class="rating-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                  </div>
                </div>
                <div class="pt-3">
                  <label class="text-medium text-sm">5 stars <span class="text-muted">- 0</span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%; height: 2px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">4 stars <span class="text-muted">- 0</span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%; height: 2px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">3 stars <span class="text-muted">- 0</span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%; height: 2px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">2 stars <span class="text-muted">- 0</span></label>
                  <div class="progress margin-bottom-1x">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%; height: 2px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <label class="text-medium text-sm">1 star <span class="text-muted">- 0</span></label>
                  <div class="progress mb-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0; height: 2px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                                    <div class="pb-2"><a class="btn btn-primary btn-block" href="https://geniusdevs.com/codecanyon/omnimart40/user/login"><span>Login</span></a></div>
                              </div>
            </div>
          </div>


    </div>
  </div>


  <div class="relatedproduct-section container padding-bottom-3x mb-1 s-pt-30">
    <!-- Related Products Carousel-->
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <h2 class="h3">You May Also Like</h2>
            </div>
        </div>
    </div>
    <!-- Carousel-->
    <div class="row">
        <div class="col-lg-12">
            <div class="relatedproductslider owl-carousel owl-loaded owl-drag">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 1.2s ease 0s; width: 2098px;"><div class="owl-item active" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                    
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134777NcCH8fb00d2318bd48048dcd8bf2546f3f52h.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/559" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/559" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="559" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="/product/{{$product->id}}">
                                Shirts Menshirts Mens Cotton Shirt 
                            </a></h3>
                              <h4 class="product-price">
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item active" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134766vobH206d1d68ce2440ada7b7bc6dfb6354a8p.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/560" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/560" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="560" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/{{$product->id}}">
                                Men Shirt Custom Shirts Hot Sale Me
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item active" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                <div class="product-badge
                                                                        bg-warning

                                                                        ">Feature</div>
                                                                                                                                                <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134755JdFHdb695965a744470b958f17251d4d277ew.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/561" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/561" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="561" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Men-Shirt-Custom-Shirts-High-Quality-Men-Women-Bamboo-Fiber-Long-Sleeve">
                                Men Shirt Custom Shirts High Qualit
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item active" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                <div class="product-badge
                                                                        bg-success
                                                                        ">Flash deal</div>
                                                                                                                                                <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134738rC1H7e01b6c3e996405db8555c5e81c8ade0b.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/562" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/562" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="562" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Men-Leather-Jacket-Men-New-Men-High-Quality-Collar-Motorcycle-Punk-Leather-Jacket">
                                Men Leather Jacket Men New Men High
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item active" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/163413468740iH32fbf23e6d3346748cd304531e0a272aa.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/564" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/564" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="564" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Pants-Factory-Hot-Sales-Large-Pockets-Elastic-Trousers-Men-Cargo-Pants">
                                Pants Factory Hot Sales Large Pocke
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134669FDWH367ac7f408644e8dad8cd151e5cc683cF.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/565" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/565" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="565" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Pants-Wholesales-Custom-Cotton-Workout-Exercise-Sweatpants-Gym-Jogger-Pants">
                                Pants Wholesales Custom Cotton Work
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341346352QRH12506540827146faad596973c3424597O.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/566" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/566" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="566" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Pants-Men-Jogger-Pants-Just-Arrived-Street-Type-Fitness-Running-Active-Wear">
                                Pants Men Jogger Pants Just Arrived
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div><div class="owl-item" style="width: 247.2px; margin-right: 15px;"><div class="slider-item">
                        <div class="product-card">

                                                                                                                                                                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                            
                                                        <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                        <div class="product-thumb">
                                <img class="lazy" alt="Product" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134618UnmHa24a8c4da58943759d7725cea11cbd5eU.jpg" style="">
                                <div class="product-button-group">
                                    <a class="product-button wishlist_store" href="https://geniusdevs.com/codecanyon/omnimart40/user/wishlist/store/567" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a class="product-button product_compare" href="javascript:;" data-target="https://geniusdevs.com/codecanyon/omnimart40/compare/product/567" title="Compare"><i class="icon-repeat"></i></a>
                                    <a class="product-button add_to_single_cart" data-target="567" href="javascript:;" title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                        </div>
                                </div>
                            <div class="product-card-body">
                              <div class="product-category"><a href="https://geniusdevs.com/codecanyon/omnimart40/catalog?category=men-clothing">Men Clothing</a></div>
                              <h3 class="product-title"><a href="https://geniusdevs.com/codecanyon/omnimart40/product/Slim-Fit-Joggers-Tapered-Sweatpants-For-Gym-Casual-Zipper">
                                Slim Fit Joggers Tapered Sweatpants
                            </a></h3>
                              <h4 class="product-price">
                                                                    <del>$1,893.26</del>
                                                                $1,362.81 </h4>
                            </div>

                          </div>
                    </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
        </div>
    </div>
  </div>



@stop