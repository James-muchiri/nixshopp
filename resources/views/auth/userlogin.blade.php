<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from geniusdevs.com/codecanyon/omnimart40/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Nov 2022 19:13:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>OmniMart -    Login
</title>

<!-- SEO Meta Tags-->
<meta name="author" content="OmniMart">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="../assets/images/1629651232pre.png">
<link rel="apple-touch-icon" href="../assets/images/1629651232pre.png">
<link rel="apple-touch-icon" sizes="152x152" href="../assets/images/1629651232pre.png">
<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/1629651232pre.png">
<link rel="apple-touch-icon" sizes="167x167" href="../assets/images/1629651232pre.png">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="../assets/front/css/plugins.min.css">


<link id="mainStyles" rel="stylesheet" media="screen" href="../assets/front/css/styles.min.css">

<link id="mainStyles" rel="stylesheet" media="screen" href="../assets/front/css/responsive.css">
<!-- Color css -->
<link href="../assets/front/css/color6e7b.css?primary_color=FF6A00" rel="stylesheet">

<!-- Modernizr-->
<script src="../assets/front/js/modernizr.min.js"></script>

    <link rel="stylesheet" href="../assets/front/css/rtl.css">
<style>

</style>









</head>
<!-- Body-->
<body class="
body_theme1
">

<!-- Preloader Start -->
<div id="preloader">
    <img src="../assets/images/16388581681_D-ZiKd0B00tdifaB2X3tKQ.gif" alt="Loading...">
</div>

<!-- Preloader endif -->


<!-- Header-->
<header class="site-header navbar-sticky">
    <div class="menu-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="t-m-s-a">
                        <a class="track-order-link" href="../track/order.html"><i class="icon-map-pin"></i>Track Order</a>
                        <a class="track-order-link compare-mobile d-lg-none" href="../compare/products.html">Compare</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="right-area">

                        <a class="track-order-link wishlist-mobile d-inline-block d-lg-none" href="login.html"><i class="icon-heart"></i>Wishlist</a>
                        <div class="t-h-dropdown ">
                            <a class="main-link" href="#">Currency<i class="icon-chevron-down"></i></a>
                            <div class="t-h-dropdown-menu">
                                                                    <a class="active" href="login.html"><i class="icon-chevron-right pr-2"></i>USD</a>
                                                                    <a class="" href="login.html"><i class="icon-chevron-right pr-2"></i>EUR</a>
                                                                    <a class="" href="login.html"><i class="icon-chevron-right pr-2"></i>INR</a>
                                                                    <a class="" href="login.html"><i class="icon-chevron-right pr-2"></i>BDT</a>
                                                                    <a class="" href="login.html"><i class="icon-chevron-right pr-2"></i>NGN</a>
                                                            </div>
                        </div>

                        <div class="login-register ">
                                                        <a class="track-order-link mr-0" href="login.html">
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
                        <div class="site-branding"><a class="site-logo align-self-center" href="/"><img src="../assets/images/1634218044logoforsite.png" alt="OmniMart"></a></div>
                        <!-- Search / Categories-->
                        <div class="search-box-wrap d-none d-lg-block d-flex">
                        <div class="search-box-inner align-self-center">
                            <div class="search-box d-flex">
                                <select name="category" id="category_select" class="categoris">
									<option value="">All</option>
                                                                        <option value="Women-Clothing">Women Clothing</option>
                                                                        <option value="men-clothing">Men Clothing</option>
                                                                        <option value="Electronics">Electronics</option>
                                                                        <option value="Beauty--Personal-Care">Beauty &amp; Personal Care</option>
                                                                        <option value="Vehicles--Accessories">Vehicles &amp; Accessories</option>
                                                                        <option value="Sports--Entertainment">Sports &amp; Entertainment</option>
                                                                        <option value="Home--Garden">Home &amp; Garden</option>
                                                                        <option value="Medicine-Health-Care">Medicine &amp; Health Care</option>
                                                                        <option value="Web-Themes--Templates">Web Themes &amp; Templates</option>
                                    									</select>
                                <form class="input-group" id="header_search_form" action="//catalog" method="get">
                                    <input type="hidden" name="category" value="" id="search__category">
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="icon-search"></i></button>
                                    </span>
                                    <input class="form-control" type="text" data-target="//search/suggest" id="__product__search" name="search" placeholder="Search by product name">
                                    <div class="serch-result d-none">

                                    </div>
                                </form>
                            </div>
                        </div>
                            <span class="d-block d-lg-none close-m-serch"><i class="icon-x"></i></span>
                        </div>
                        <!-- Toolbar-->
                        <div class="toolbar d-flex">

                        <div class="toolbar-item close-m-serch visible-on-mobile"><a href="#">
                            <div>
                                <i class="icon-search"></i>
                            </div>
                            </a>
                        </div>
                        <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
                            <div><i class="icon-menu"></i><span class="text-label">Menu</span></div>
                            </a>
                        </div>

                        <div class="toolbar-item hidden-on-mobile"><a href="../compare/products.html">
                            <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label compare_count">0</span></span><span class="text-label">Compare</span></div>
                            </a>
                        </div>
                                                <div class="toolbar-item hidden-on-mobile"><a href="login.html">
                          <div><span class="compare-icon"><i class="icon-heart"></i></span><span class="text-label">Wishlist</span></div>
                          </a>
                      </div>
                                                <div class="toolbar-item"><a href="../cart.html">
                            <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">0 </span></span><span class="text-label">Cart</span></div>
                            </a>
                            <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="//header/cart/load">
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
                                  <span class="active" id="mmenu-tab" data-bs-toggle="tab" data-bs-target="#mmenu"  role="tab" aria-controls="mmenu" aria-selected="true">Menu</span>
                                </li>
                                <li class="nav-item" role="presentation99">
                                  <span class="" id="mcat-tab" data-bs-toggle="tab" data-bs-target="#mcat"  role="tab" aria-controls="mcat" aria-selected="false">Category</span>
                                </li>

                              </ul>
                              <div class="tab-content p-0" >
                                <div class="tab-pane fade show active" id="mmenu" role="tabpanel" aria-labelledby="mmenu-tab">
                                    <nav class="slideable-menu">
                                        <ul>
                                            <li class=""><a href="/"><i class="icon-chevron-right"></i>Home</a></li>
                                                                                        <li class=""><a href="../catalog.html"><i class="icon-chevron-right"></i>Shop</a></li>
                                                                                                                                    <li class=""><a href="../campaign/products.html"><i class="icon-chevron-right"></i>Campaign</a></li>
                                                                                                                                    <li class=""><a href="../brands.html"><i class="icon-chevron-right"></i>Brand</a></li>

                                                                                        <li class=""><a href="../blog.html"><i class="icon-chevron-right"></i>Blog</a></li>
                                                                                        <li class="t-h-dropdown">
                                                <a class="" href="#"><i class="icon-chevron-right"></i>Pages <i class="icon-chevron-down"></i></a>
                                                <div class="t-h-dropdown-menu">
                                                                                                        <a class="" href="../faq.html"><i class="icon-chevron-right pr-2"></i>Faq</a>
                                                                                                                                                            <a class=" " href="../about-us.html"><i class="icon-chevron-right pr-2"></i>About Us</a>
                                                                                                        <a class=" " href="../privacy-policy.html"><i class="icon-chevron-right pr-2"></i>Privacy Policy</a>
                                                                                                        <a class=" " href="../terms-and-service.html"><i class="icon-chevron-right pr-2"></i>Terms &amp; Service</a>
                                                                                                        <a class=" " href="../return-policy.html"><i class="icon-chevron-right pr-2"></i>Return Policy</a>
                                                                                                        <a class=" " href="../How-It-Works.html"><i class="icon-chevron-right pr-2"></i>How It Works</a>
                                                                                                    </div>
                                            </li>

                                                                                    <li class=""><a href="../contact.html"><i class="icon-chevron-right"></i>Contact</a></li>
                                                                                </ul>
                                    </nav>
                                </div>
                                <div class="tab-pane fade" id="mcat" role="tabpanel" aria-labelledby="mcat-tab">
                                    <nav class="slideable-menu">
                                        <div class="widget-categories mobile-cat">
    <ul id="category_list">
                <li class="has-children">
            <a class="category_search" href="../catalog50ca.html?category=Women-Clothing">Women Clothing
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../catalog2319.html?subcategory=Womens-Underwear">Women&#039;s Underwear</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalog2cba.html?childcategory=Pajama-Sets">Pajama Sets</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog6707.html?childcategory=Women-Socks--Hosiery">Women Socks &amp; Hosiery</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog2993.html?childcategory=Shapewer">Shapewer</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogef81.html?childcategory=Bras">Bras</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog3c92.html?subcategory=Weddings--Events">Weddings &amp; Events</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalogf078.html?childcategory=Wedding-Dresses">Wedding Dresses</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog25b6.html?childcategory=Prom-Dresses">Prom Dresses</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogc9e0.html?childcategory=Evening-Dresses">Evening Dresses</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog9947.html?childcategory=Costumes">Costumes</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog0ccd.html?subcategory=Bottoms">Bottoms</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalog5b48.html?childcategory=Leggings">Leggings</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog840c.html?childcategory=Skirt">Skirt</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog26d4.html?childcategory=Jeans">Jeans</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog334e.html?childcategory=Pants--Capris">Pants &amp; Capris</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog90b8.html?subcategory=Womens-Fashion">Women&#039;s Fashion</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalogb148.html?subcategory=Accessories">Accessories</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../catalog2e44.html?category=men-clothing">Men Clothing
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../catalog99c4.html?subcategory=Outerwear--Jackets">Outerwear &amp; Jackets</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalogef03.html?childcategory=Jackets">Jackets</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog20da.html?childcategory=Sweaters">Sweaters</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog8f6f.html?childcategory=Parkas">Parkas</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogf4b4.html?childcategory=Down-Jackets">Down Jackets</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog92c1.html?childcategory=Suits--Blazers">Suits &amp; Blazers</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog0ccd.html?subcategory=Bottoms">Bottoms</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog0064.html?subcategory=Underwear">Underwear</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalog0974.html?childcategory=Boxers">Boxers</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog77e9.html?childcategory=Briefs">Briefs</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogf1a6.html?childcategory=Long-Johns">Long Johns</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog9091.html?childcategory=Sleep--Lounge">Sleep &amp; Lounge</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalog2cba.html?childcategory=Pajama-Sets">Pajama Sets</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalogb148.html?subcategory=Accessories">Accessories</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../cataloge364.html?category=Electronics">Electronics
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../catalogb7dd.html?subcategory=Mobile-Phones">Mobile Phones</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalogcd6d.html?childcategory=Cellphones">Cellphones</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogb460.html?childcategory=iPhones">iPhones</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../cataloga3f2.html?childcategory=Android-Phone">Android Phone</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog4080.html?subcategory=Mobile-Phone-Accessories">Mobile Phone Accessories</a>
                    <ul id="childcategory_list">
                                                <li class="">
                            <a class="childcategory" href="../catalog0fd6.html?childcategory=Phone-Bags--Cases">Phone Bags &amp; Cases</a>
                        </li>
                                                <li class="">
                            <a class="childcategory" href="../catalogb503.html?childcategory=Mobile-Phone-Cables">Mobile Phone Cables</a>
                        </li>
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog444f.html?subcategory=Laptop">Laptop</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalogcaa2.html?subcategory=Computer">Computer</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog511c.html?subcategory=Featured-Accessories">Featured Accessories</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog5f30.html?subcategory=DSLR">DSLR</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../cataloge5e2.html?category=Vehicles--Accessories">Vehicles &amp; Accessories
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../catalog57be.html?subcategory=Bike">Bike</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog3a84.html?subcategory=Car">Car</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../catalogbcbe.html?category=Beauty--Personal-Care">Beauty &amp; Personal Care
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../catalog8f43.html?subcategory=Hair-Weaves">Hair Weaves</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog7846.html?subcategory=Makeup">Makeup</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog459b.html?subcategory=Nail-Art--Tools">Nail Art &amp; Tools</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../cataloge51a.html?subcategory=Skin-Care">Skin Care</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog7a56.html?subcategory=Personal-Care">Personal Care</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../catalogde8b.html?category=Web-Themes--Templates">Web Themes &amp; Templates
                                    <span><i class="icon-chevron-down"></i></span>
                            </a>
            <ul id="subcategory_list">
                                <li class="">
                    <a class="subcategory" href="../cataloga7e3.html?subcategory=WordPress-Themes">WordPress Themes</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog42b8.html?subcategory=Laravel-CMS">Laravel CMS</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                                <li class="">
                    <a class="subcategory" href="../catalog6f8c.html?subcategory=HTML-Templates">HTML Templates</a>
                    <ul id="childcategory_list">
                                            </ul>
                </li>
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../catalog5263.html?category=Sports--Entertainment">Sports &amp; Entertainment
                            </a>
            <ul id="subcategory_list">
                            </ul>
          </li>
                <li class="has-children">
            <a class="category_search" href="../catalogc203.html?category=Home--Garden">Home &amp; Garden
                            </a>
            <ul id="subcategory_list">
                            </ul>
          </li>
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
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalog50ca.html?category=Women-Clothing">
                        <img class="lazy" data-src="/images/1629616296pexels-juan-mendez-1536619.jpg">
                        <span class="text-gray-dark">Women Clothing</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog2319.html?subcategory=Womens-Underwear">
                                Women&#039;s Underwear
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalog2cba.html?childcategory=Pajama-Sets">Pajama Sets</a>
                                                                <a href="../catalog6707.html?childcategory=Women-Socks--Hosiery">Women Socks &amp; Hosiery</a>
                                                                <a href="../catalog2993.html?childcategory=Shapewer">Shapewer</a>
                                                                <a href="../catalogef81.html?childcategory=Bras">Bras</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog3c92.html?subcategory=Weddings--Events">
                                Weddings &amp; Events
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalogf078.html?childcategory=Wedding-Dresses">Wedding Dresses</a>
                                                                <a href="../catalog25b6.html?childcategory=Prom-Dresses">Prom Dresses</a>
                                                                <a href="../catalogc9e0.html?childcategory=Evening-Dresses">Evening Dresses</a>
                                                                <a href="../catalog9947.html?childcategory=Costumes">Costumes</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog0ccd.html?subcategory=Bottoms">
                                Bottoms
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalog5b48.html?childcategory=Leggings">Leggings</a>
                                                                <a href="../catalog840c.html?childcategory=Skirt">Skirt</a>
                                                                <a href="../catalog26d4.html?childcategory=Jeans">Jeans</a>
                                                                <a href="../catalog334e.html?childcategory=Pants--Capris">Pants &amp; Capris</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog90b8.html?subcategory=Womens-Fashion">
                                Women&#039;s Fashion
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalogb148.html?subcategory=Accessories">
                                Accessories
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalog2e44.html?category=men-clothing">
                        <img class="lazy" data-src="/images/1629616281pexels-moose-photos-1036627.jpg">
                        <span class="text-gray-dark">Men Clothing</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog99c4.html?subcategory=Outerwear--Jackets">
                                Outerwear &amp; Jackets
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalogef03.html?childcategory=Jackets">Jackets</a>
                                                                <a href="../catalog20da.html?childcategory=Sweaters">Sweaters</a>
                                                                <a href="../catalog8f6f.html?childcategory=Parkas">Parkas</a>
                                                                <a href="../catalogf4b4.html?childcategory=Down-Jackets">Down Jackets</a>
                                                                <a href="../catalog92c1.html?childcategory=Suits--Blazers">Suits &amp; Blazers</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog0ccd.html?subcategory=Bottoms">
                                Bottoms
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog0064.html?subcategory=Underwear">
                                Underwear
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalog0974.html?childcategory=Boxers">Boxers</a>
                                                                <a href="../catalog77e9.html?childcategory=Briefs">Briefs</a>
                                                                <a href="../catalogf1a6.html?childcategory=Long-Johns">Long Johns</a>
                                                                <a href="../catalog9091.html?childcategory=Sleep--Lounge">Sleep &amp; Lounge</a>
                                                                <a href="../catalog2cba.html?childcategory=Pajama-Sets">Pajama Sets</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalogb148.html?subcategory=Accessories">
                                Accessories
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../cataloge364.html?category=Electronics">
                        <img class="lazy" data-src="/images/1629616270computer.jpg">
                        <span class="text-gray-dark">Electronics</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../catalogb7dd.html?subcategory=Mobile-Phones">
                                Mobile Phones
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalogcd6d.html?childcategory=Cellphones">Cellphones</a>
                                                                <a href="../catalogb460.html?childcategory=iPhones">iPhones</a>
                                                                <a href="../cataloga3f2.html?childcategory=Android-Phone">Android Phone</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog4080.html?subcategory=Mobile-Phone-Accessories">
                                Mobile Phone Accessories
                                                                <i class="icon-chevron-right"></i>
                                                                </a>
                                                              <div class="child-category">

                                                                <a href="../catalog0fd6.html?childcategory=Phone-Bags--Cases">Phone Bags &amp; Cases</a>
                                                                <a href="../catalogb503.html?childcategory=Mobile-Phone-Cables">Mobile Phone Cables</a>
                                                              </div>
                                                          </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog444f.html?subcategory=Laptop">
                                Laptop
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalogcaa2.html?subcategory=Computer">
                                Computer
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog511c.html?subcategory=Featured-Accessories">
                                Featured Accessories
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog5f30.html?subcategory=DSLR">
                                DSLR
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../cataloge5e2.html?category=Vehicles--Accessories">
                        <img class="lazy" data-src="/images/1629616254pexels-thales-silva-772393.jpg">
                        <span class="text-gray-dark">Vehicles &amp; Accessories</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog57be.html?subcategory=Bike">
                                Bike
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog3a84.html?subcategory=Car">
                                Car
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalogbcbe.html?category=Beauty--Personal-Care">
                        <img class="lazy" data-src="/images/1631023636ballll.jpg">
                        <span class="text-gray-dark">Beauty &amp; Personal Care</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog8f43.html?subcategory=Hair-Weaves">
                                Hair Weaves
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog7846.html?subcategory=Makeup">
                                Makeup
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog459b.html?subcategory=Nail-Art--Tools">
                                Nail Art &amp; Tools
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../cataloge51a.html?subcategory=Skin-Care">
                                Skin Care
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog7a56.html?subcategory=Personal-Care">
                                Personal Care
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalogde8b.html?category=Web-Themes--Templates">
                        <img class="lazy" data-src="/images/1632341620bbb.jpg">
                        <span class="text-gray-dark">Web Themes &amp; Templates</span>
                                                <i class="icon-chevron-right"></i>
                                            </a>
                                        <div class="sub-c-box">
                                                        <div class="child-c-box">
                              <a class="title" href="../cataloga7e3.html?subcategory=WordPress-Themes">
                                WordPress Themes
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog42b8.html?subcategory=Laravel-CMS">
                                Laravel CMS
                                                                </a>
                                                            </div>
                                                        <div class="child-c-box">
                              <a class="title" href="../catalog6f8c.html?subcategory=HTML-Templates">
                                HTML Templates
                                                                </a>
                                                            </div>
                                                </div>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalog5263.html?category=Sports--Entertainment">
                        <img class="lazy" data-src="/images/1629616243pexels-karolina-grabowska-4498574.jpg">
                        <span class="text-gray-dark">Sports &amp; Entertainment</span>
                                            </a>
                                    </div>
                            <div class="c-item">
                    <a class="d-block navi-link" href="../catalogc203.html?category=Home--Garden">
                        <img class="lazy" data-src="/images/1629616234pexels-cup-of-couple-8015784.jpg">
                        <span class="text-gray-dark">Home &amp; Garden</span>
                                            </a>
                                    </div>
                    <a href="../catalog.html" class="d-block navi-link view-all-category">
            <img class="lazy" data-src="/images/category.jpg" alt="">
            <span class="text-gray-dark">All Categories</span>
        </a>
    </div>


    </div>


                </div>
                <div class="col-lg-9 d-flex justify-content-between">
                    <div class="nav-inner">
                        <nav class="site-menu">
                            <ul>
                                <li class="t-h-dropdown  ">
                                    <a class="main-link" href="/">Home <i class="icon-chevron-down"></i></a>
                                    <div class="t-h-dropdown-menu">
                                        <a class="" href="/"><i class="icon-chevron-right pr-2"></i>Home 1</a>
                                        <a class="" href="/"><i class="icon-chevron-right pr-2"></i>Home 2</a>
                                        <a class="" href="/"><i class="icon-chevron-right pr-2"></i>Home 3</a>
                                        <a class="" href="/"><i class="icon-chevron-right pr-2"></i>Home 4</a>
                                    </div>
                                </li>
                                                                <li class=""><a href="../catalog.html">Shop</a></li>
                                                                                                <li class=""><a href="../campaign/products.html">Campaign</a></li>
                                                                                                <li class=""><a href="../brands.html">Brand</a></li>
                                                                                                <li class=""><a href="../blog.html">Blog</a></li>

                                <li class="t-h-dropdown">
                                    <a class="main-link" href="#">Pages <i class="icon-chevron-down"></i></a>
                                    <div class="t-h-dropdown-menu">
                                                                                <a class="" href="../faq.html"><i class="icon-chevron-right pr-2"></i>Faq</a>
                                                                                                                        <a class=" " href="../about-us.html"><i class="icon-chevron-right pr-2"></i>About Us</a>
                                                                                <a class=" " href="../privacy-policy.html"><i class="icon-chevron-right pr-2"></i>Privacy Policy</a>
                                                                                <a class=" " href="../terms-and-service.html"><i class="icon-chevron-right pr-2"></i>Terms &amp; Service</a>
                                                                                <a class=" " href="../return-policy.html"><i class="icon-chevron-right pr-2"></i>Return Policy</a>
                                                                                <a class=" " href="../How-It-Works.html"><i class="icon-chevron-right pr-2"></i>How It Works</a>
                                                                            </div>
                                </li>

                                                              <li class=""><a href="../contact.html">Contact</a></li>
                                                          </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
<!-- Page Content-->

    <!-- Page Title-->
<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a> </li>
                <li class="separator"></li>
                <li>Login/Register</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1">
  <div class="row">
          <div class="col-md-6">
            <form class="card" method="post" action="//user/login-submit">
                <input type="hidden" name="_token" value="jhuKHsWUbrGg4b66oTz03vorQlvzqkd3R7p6RTYr">              <div class="card-body ">
                <h4 class="margin-bottom-1x text-center">Login</h4>

                <div class="form-group input-group">
                  <input class="form-control" type="email" name="login_email" placeholder="Email" value=""><span class="input-group-addon"><i class="icon-mail"></i></span>
                </div>

                <div class="form-group input-group">
                  <input class="form-control" type="password" name="login_password" placeholder="Password" ><span class="input-group-addon"><i class="icon-lock"></i></span>
                </div>

                <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="remember_me">
                    <label class="custom-control-label" for="remember_me">Remember me</label>
                  </div><a class="navi-link" href="forgot.html">Forgot password?</a>
                </div>
                <div class="text-center">
                  <button class="btn btn-primary margin-bottom-none" type="submit"><span>Login</span></button>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center mt-3">
                                        <a class="facebook-btn mr-2" href="https://www.facebook.com/v3.3/dialog/oauth?client_id=643929170080071&amp;redirect_uri=https%3A%2F%2Fgeniusdevs.com%2Fcodecanyon%2Fomnimart40%2Fauth%2Ffacebook%2Fcallback&amp;scope=email&amp;response_type=code&amp;state=b0gtLxub9zvGiXgsZ4BoLd9lvLuj7oBy4aytDozv">Facebook login
                    </a>
                                                            <a class="google-btn" href="https://accounts.google.com/o/oauth2/auth?client_id=915191002660-6hjno4cgnbcm5p1kb3t692trh7pc6ngh.apps.googleusercontent.com&amp;redirect_uri=https%3A%2F%2Fgeniusdevs.com%2Fcodecanyon%2Fomnimart40%2Fauth%2Fgoogle%2Fcallback&amp;scope=openid+profile+email&amp;response_type=code&amp;state=ifeBycI6frwuNaes0N3fO2OEcKf8q8ejQH1qhRhq"> Google login
                    </a>
                                      </div>
                  </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="card register-area">
                <div class="card-body ">
                    <h4 class="margin-bottom-1x text-center">Register</h4>
            <form class="row" action="//user/register-submit" method="POST">
                <input type="hidden" name="_token" value="jhuKHsWUbrGg4b66oTz03vorQlvzqkd3R7p6RTYr">              <div class="col-sm-6">
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
                  <input class="form-control" name="phone" type="text" placeholder="Phone Number" id="reg-phone" value="">
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

                            <div class="col-lg-12 mb-4">
                  <script src="../../../../www.google.com/recaptcha/apid41d.js?" async defer></script>

                  <div data-sitekey="6LcnPoEaAAAAAF6QhKPZ8V4744yiEnr41li3SYDn" class="g-recaptcha"></div>
                                </div>

              <div class="col-12 text-center">
                <button class="btn btn-primary margin-bottom-none" type="submit"><span>Register</span></button>
              </div>
            </form>
                </div>
            </div>
          </div>
        </div>
  </div>
  <!-- Site Footer-->

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
                <form class="subscriber-form" action="//subscriber/submit" method="post">
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
            <p class="mb-1"><strong>Address: </strong> 514 S. Magnolia St. Orlando, FL 32806, USA</p>
            <p class="mb-1"><strong>Phone: </strong> 453876234</p>
            <p class="mb-3"><strong>Email: </strong> demoemail123@gmail.com</p>
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
                    <a class="" href="../faq.html">Faq</a>
                </li>
                                                <li><a href="../about-us.html">About Us</a></li>

                                <li><a href="../privacy-policy.html">Privacy Policy</a></li>

                                <li><a href="../terms-and-service.html">Terms &amp; Service</a></li>

                                <li><a href="../return-policy.html">Return Policy</a></li>

                                <li><a href="../How-It-Works.html">How It Works</a></li>


            </ul>
          </div>
        </div>
        <div class="col-lg-4">
            <!-- Subscription-->
            <section class="widget">
              <h3 class="widget-title">Newsletter</h3>
              <form class="row subscriber-form" action="//subscriber/submit" method="post">
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
              <div class="pt-3"><img class="d-block gateway_image" src="../assets/images/16305963101621960148credit-cards-footer.png"></div>
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
<script type="text/javascript" src="../assets/front/js/plugins.min.js"></script>
<script type="text/javascript" src="../assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="../assets/front/js/scripts.min.js"></script>
<script type="text/javascript" src="../assets/front/js/lazy.min.js"></script>
<script type="text/javascript" src="../assets/front/js/lazy.plugin.js"></script>
<script type="text/javascript" src="../assets/front/js/myscript.js"></script>


<script type="text/javascript">
    let mainurl = '/';

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
    </script>


</body>

<!-- Mirrored from geniusdevs.com/codecanyon/omnimart40/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Nov 2022 19:13:55 GMT -->
</html>
