<header class="site-header navbar-sticky">
    <div class="menu-top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="t-m-s-a">
                        <a class="track-order-link" href="/track/order"><i class="icon-map-pin"></i>Track Order</a>
                        <a class="track-order-link compare-mobile " href="/compare">Compare</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-area">

                      

                        <div class="login-register ">
                                                        <a class="track-order-link mr-0" href="user/login">
                            Login/Register
                            </a>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Topbar-->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <!-- Logo-->
                        <div class="site-branding"><a class="site-logo align-self-center" href="/"><img src="{{ asset('images/image.png') }}" alt="OmniMart"></a></div>
                        <!-- Search / Categories-->
                        <div class="search-box-wrap d-none d-lg-block d-flex">
                        <div class="search-box-inner align-self-center">
                            <div class="search-box d-flex">
                                <select name="category" id="category_select" class="categoris">
									<option value="">All</option>

                                            @foreach ($category as $header_category)


                                            <option value="{{$header_category->id}}">{{$header_category->name}}</option>
                                                                        


                                            @endforeach

                                     </select>
                                <form class="input-group" id="header_search_form">
                                    <input class="form-control" type="text" id="__product__search" name="search" placeholder="Search by product name">
                                    
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                 <div class="serch-result d-none">

                                    </div>
                                </form>
                            </div>
                        </div>
                            <span class="d-block d-lg-none close-m-serch"><i class="fa fa-close"></i></span>
                        </div>
                        <!-- Toolbar-->
                        <div class="toolbar d-flex">

                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">
                            <div>
                                <i class="fa fa-search"></i>
                            </div>
                            </a>
                        </div>
                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
                            <div><i class="fa fa-bars"></i><span class="text-label">Menu</span></div>
                            </a>
                        </div>

                        <div class="toolbar-item hidden-on-mobile"><a href="/compare">
                            <div><span class="compare-icon"><i class="fa fa-repeat"></i><span class="count-label compare_count">0</span></span><span class="text-label">Compare</span></div>
                            </a>
                        </div>
                                                <div class="toolbar-item hidden-on-mobile"><a href="/user/login">
                          <div><span class="compare-icon"><i class="fa fa-heart"></i></span><span class="text-label">Wishlist</span></div>
                          </a>
                      </div>
                                                <div class="toolbar-item"><a href="/cart">
                            <div><span class="cart-icon"><i class="fa fa-cart-plus"></i><span class="count-label cart_count">0 </span></span><span class="text-label">Cart</span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="https://geniusdevs.com/codecanyon/omnimart40/header/cart/load">
                            Cart empty
  </div>


                            </div>
                        </div>
                        </div>

                        <!-- Mobile Menu-->
                        <div class="mobile-menu">
                            <!-- Slideable (Mobile) Menu-->
                            <div class="mm-heading-area">
                                <h4>Navigation</h4>
                                <div class="toolbar-item visible-on-mobile mobile-menu-toggle mm-t-two">
                                    <a href="#">
                                        <div> <i class="icon-x"></i></div>
                                    </a>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation99">
                                  <span class="active" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu" role="tab" aria-controls="mmenu" aria-selected="true">Menu</span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat" role="tab" aria-controls="mcat" aria-selected="false">Category</span>
                                </li>

                              </ul>
                              <div class="tab-content p-0">
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu">
                                        <ul>
                                            <li class="active"><a href="/"><i class="icon-chevron-right"></i>Home</a></li>
                                                       <li class=""><a href="/shop"><i class="icon-chevron-right"></i>Shop</a></li>
                                                    <li class=""><a href="/campaign"><i class="icon-chevron-right"></i>Deal of the week</a></li>
                                                    <li class=""><a href="/brands"><i class="icon-chevron-right"></i>Brand</a></li>

                                                    </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu">
                                        <div class="widget-categories mobile-cat">
    <ul id="category_list">

        @foreach ($category as $cart_menu)
        <li class="has-children">
            <a class="category_search" href="#">{{$cart_menu->name}}
                                    <span><i class="fa fa-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">

                @foreach ($sub_category as $sub_cart_menu)
                @if ($sub_cart_menu->category_id == $cart_menu->id)
                  

                                <li class="">
                    <a class="subcategory" href="#">{{$sub_cart_menu->name}}</a>
                    <ul id="childcategory_list">


                        @foreach ($child_category as $child_cart_menu)
                        @if ($child_cart_menu->subcategory_id == $sub_cart_menu->id)
                                 <li class="">
                        <a class="childcategory" href="#">{{$child_cart_menu->name}}</a>
                    </li>
                       @endif
                       @endforeach

                           




                 
                                            </ul>
                </li>


                @endif
                @endforeach
             

              
              
                            </ul>
          </li>
        @endforeach
            
          
                
            </ul>
  </div>








                                    </nav>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <!-- Navbar-->
  <div class="navbar">
        <div class="container">
            <div class="row g-3 w-100">
                <div class="col-lg-3">
                    <div class="left-category-area">
        <div class="category-header">
            <h4><i class="icon-align-justify"></i> Categories</h4>
        </div>
        <div class="category-list">
                          @foreach ($category as $cart_menu)
                          <div class="c-item">
                            <a class="d-block navi-link" href="#">
                                <img class="lazy" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1629616296pexels-juan-mendez-1536619.jpg" style="">
                                <span class="text-gray-dark">{{$cart_menu->name}}</span>
                                                        <i class="icon-chevron-right"></i>
                                                    </a>
                                                <div class="sub-c-box">
                                                    @foreach ($sub_category as $sub_cart_menu)
                                                        @if ($sub_cart_menu->category_id == $cart_menu->id)
                                                            
                                                      
                                                   
                                                                <div class="child-c-box">
                                      <a class="title" href="#">
                                       {{$sub_cart_menu->name}}
                                                                        <i class="icon-chevron-right"></i>
                                                                        </a>
                                                                       <div class="child-category">
                                                                         @foreach ($child_category as $child_cart_menu)
                                                                         @if ($child_cart_menu->subcategory_id == $sub_cart_menu->id)
                                                           
                                                                        <a href="#">{{$child_cart_menu->name}}</a>
                                                                        @endif
                                                                        @endforeach
                                                                        
                                                                
                                                                      </div>
                                                                  </div>

                                                                  @endif
                                                                  @endforeach
                                                               
                                                               
                                                        </div>
                                            </div>
                          @endforeach
                           
                
                    <a href="/catalog" class="d-block navi-link view-all-category">
            <img class="lazy" alt="" src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/category.jpg" style="">
            <span class="text-gray-dark">All Categories</span>
        </a>
    </div>


    </div>


                </div>
                <div class="col-lg-9 d-flex justify-content-between">
                    <div class="nav-inner">
                        <nav class="site-menu">
                            <ul>
                                <li class=""><a href="/">Home</a></li>
                                                                <li class=""><a href="/shop">Shop</a></li>
                                                                                                <li class=""><a href="/campaign">Deal of the week</a></li>
                                                                                                <li class=""><a href="/brands">Brand</a></li>
                                                                                                



                                                     </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
