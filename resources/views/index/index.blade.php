
@extends('layouts.index')

@section('content')

<!-- Page Content-->



            <div class="slider-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Main Slider-->
                        <div class="hero-slider">
                            <div class="hero-slider-main owl-carousel dots-inside" >
                               
                                                                
                                    @foreach ($sliders as $slider)
                                    <div class="item" style="background: url('/uploads/{{$slider->photo}}')">

    <div class="item-inner">
        <div class="from-bottom">
                                                            <div class="title text-body">{{$slider->title}}</div>
            <div class="subtitle text-body">{{$slider->details}}</div>
        </div>
        <a class="btn btn-primary scale-up delay-1"
            href="{{$slider->link}}" style="    float: right;"> <span>Buy Now</span>
        </a>
    </div>
</div>
                                    @endforeach
                                                            </div>
                        </div>
                    </div>

    

                                        <div class="col-lg-4 d-none d-lg-block">
                                            @foreach ($header_banners as $header_banner)
                                            @if ($header_banner->img_id == "1")
                                                
                                           
                        <a href="#" class="sright-image">
                            <img src="{{ asset('uploads') }}/{{$header_banner->photo}}"  alt="">
                            <div class="inner-content">

                                                                  <p>50% OFF</p>

                                                                <h4>Watch</h4>
                                                            </div>
                        </a>
                        @endif
                        @endforeach
                        @foreach ($header_banners as $header_banner)
                        @if ($header_banner->img_id == "2")
         
                        <a href="#" class="sright-image mb-0">
                            <img src="{{ asset('uploads') }}/{{$header_banner->photo}}"  alt="">
                            <div class="inner-content">
                                                                 <p>40% OFF</p>
                                                                                                 <h4>Man</h4>
                                                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>





            <div class="deal-of-day-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">Deals Of The Week</h2>
                            <div class="right-area">
                                    <div class="countdown countdown-alt" data-date-time="10/10/2022"></div>
                                    <a class="right_link" href="/campaign">View All <i class="icon-chevron-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3">

                    <div class="col-lg-12">
                    <div class="popular-category-slider owl-carousel">


     
@foreach ($deals as $deal)
    

                        <div class="slider-item">
                            <div class="product-card">
                                <div class="product-thumb">
                                    <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134777NcCH8fb00d2318bd48048dcd8bf2546f3f52h.jpg" alt="Product">
                                    <div class="product-button-group"><a class="product-button wishlist_store" href="user/wishlist/store/559.json" title="Wishlist"><i class="icon-heart"></i></a>
                                        <a data-target="http://127.0.0.1:8000/compare/product/559" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                                                    <a class="product-button add_to_single_cart"  data-target="559" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
                                            </a>
                                                                            </div>
                                </div>
                                    <div class="product-card-body">

                                        <div class="product-category"><a href="catalog2e44.html?category=men-clothing">Men Clothing</a></div>
                                        <h3 class="product-title"><a href="product/sxJShirts-Menshirts-Mens-Cotton-Shirt-Factory-Direct-Various-Style-CustomizationTf.html">
                                            Shirts Menshirts Mens Cotton Shirt
                                        </a></h3>
                                        <div class="rating-stars">
                                            <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                        </div>
                                        <h4 class="product-price">

                                        $1,362.81
                                        </h4>

                                    </div>

                            </div>
                        </div>
                        @endforeach


                                            </div>

                </div>

                </div>
            </div>
        </div>


            <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">

                        @foreach ($genius_banner as $genius_banners)
                        @if ($genius_banners->img_id == "1")
                            
                       
                        <a href="#" class="genius-banner">
        <img src="{{ asset('uploads') }}/{{$genius_banners->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                  
                    <div class="col-md-4">

                        @foreach ($genius_banner as $genius_banners)
                        @if ($genius_banners->img_id == "2")
                            
                       
                        <a href="#" class="genius-banner">
        <img src="{{ asset('uploads') }}/{{$genius_banners->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                    <div class="col-md-4">

                        @foreach ($genius_banner as $genius_banners)
                        @if ($genius_banners->img_id == "3")
                            
                       
                        <a href="#" class="genius-banner">
        <img src="{{ asset('uploads') }}/{{$genius_banners->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                </div>
            </div>
        </div>


            <section class="newproduct-section popular-category-sec mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">Popular Categories</h2>
                            <div class="links" id="pop">
                                                                <a class="category_get active" data-target="popular_category_view" data-href="get/Women-Clothing/popular_category/slider"  href="javascript:;" class="active">Women Clothing</a>
                                                                <a class="category_get " data-target="popular_category_view" data-href="get/Women-Clothing/popular_category/slider"  href="javascript:;" class="">Men Clothing</a>
                                                                <a class="category_get " data-target="popular_category_view" data-href="get/Women-Clothing/popular_category/slider"  href="javascript:;" class="">Electronics</a>
                                                                <a class="category_get " data-target="popular_category_view" data-href="get/Women-Clothing/popular_category/slider"  href="javascript:;" class="">Beauty &amp; Personal Care</a>
                                                            </div>
                        </div>
                    </div>
                </div>
                <div class="popular_category_view d-none">
                    <img  src="assets/images/ajax_loader.gif" alt="">
                </div>

                <div class="row" id="popular_category_view">
                    <div class="col-lg-12">
                        <div class="popular-category-slider  owl-carousel">

                        </div>
                    </div>

                </div>
            </div>
        </section>

            <div class="bannner-section mt-60">
            <div class="container ">
                <div class="row gx-3">

                    <div class="col-md-4">

                        @foreach ($genius_banner2 as $genius_banners2)
                        @if ($genius_banners2->img_id == "1")
                            
                       
                        <a href="#" class="genius-banner">
                  <img class="lazy" src="{{ asset('uploads') }}/{{$genius_banners2->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                   
                         
                       
                    
                    <div class="col-md-4">

                        @foreach ($genius_banner2 as $genius_banners2)
                        @if ($genius_banners2->img_id == "2")
                            
                       
                        <a href="#" class="genius-banner">
                  <img class="lazy" src="{{ asset('uploads') }}/{{$genius_banners2->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                    <div class="col-md-4">

                        @foreach ($genius_banner2 as $genius_banners2)
                        @if ($genius_banners2->img_id == "3")
                            
                       
                        <a href="#" class="genius-banner">
                  <img class="lazy" src="{{ asset('uploads') }}/{{$genius_banners2->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                </div>
            </div>
        </div>

            <section class="selected-product-section speacial-product-sec mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="links" id="pro">
                                <a data-href="get/type/feature" data-target="type_product_view" href="javascript:;" class="product_get active">Featured</a>
                                <a data-href="get/type/feature" data-target="type_product_view" class="product_get" href="javascript:;">Best Seller</a>
                                <a data-href="get/type/feature" data-target="type_product_view" class="product_get" href="javascript:;">Top Rated</a>
                                <a data-href="get/type/feature" href="javascript:;">New Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="type_product_view d-none">
                        <img  src="assets/images/ajax_loader.gif" alt="">
                    </div>
                    <div class="col-lg-12" id="type_product_view">

                       
                                   
                    </div>

                </div>
            </div>
        </section>

        <div class="flash-sell-new-section mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h2 class="h3">Flash Deal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="flash-deal-slider owl-carousel" >
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134738rC1H7e01b6c3e996405db8555c5e81c8ade0b.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/562.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/562" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="562" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="catalog2e44.html?category=men-clothing">Men Clothing</a></div>
                                                <h3 class="product-title"><a href="product/Men-Leather-Jacket-Men-New-Men-High-Quality-Collar-Motorcycle-Punk-Leather-Jacket.html">
                                                    Men Leather Jacket Men New Men High Quality Collar
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>

                                                $1,362.81
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                                                                                                                                                                                                    <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134831EzTH75345266923349e280d5f5e5fd5c71e5a.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/545.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/545" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="545" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="cataloge364.html?category=Electronics">Electronics</a></div>
                                                <h3 class="product-title"><a href="product/Dropshipping-EIS-----inch-LCD-Full-HD----P-Recording-----Mega-HD-DV-SLR-Camera.html">
                                                    Dropshipping EIS 2.4 inch LCD Full HD 720P Recordi
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$189.78</del>

                                                $134.83
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                                                                                    <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -15%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134904Sy7H220c85b541d145789e167a4b23787dd5h.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/542.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/542" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="542" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="cataloge364.html?category=Electronics">Electronics</a></div>
                                                <h3 class="product-title"><a href="product/Cheap-Price-Mobile-Phones-i---Pro----inch-FHD-Big-Screen-Smart-Phone-------GB.html">
                                                    Cheap Price Mobile Phones i13 Pro 6.6inch FHD Big
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,460.67</del>

                                                $1,235.96
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                            <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -18%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134938VjgHcb62dec2d6a241fc90ce2bb04059684em.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/540.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/540" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="540" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="cataloge364.html?category=Electronics">Electronics</a></div>
                                                <h3 class="product-title"><a href="product/UMIDIGI-A--Pro-Android-Mobile-Phone--g---MP-Quad-Camera------FHD--Full-Screen--GB-RAM.html">
                                                    UMIDIGI A9 Pro Android Mobile Phone 4g 48MP Quad C
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,910.11</del>

                                                $1,573.03
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135382cOuUff4a9015ea454a79a2b9e3249bd2e19bg.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/532.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/532" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="532" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="catalog50ca.html?category=Women-Clothing">Women Clothing</a></div>
                                                <h3 class="product-title"><a href="product/Shein-Womens-Clothing------Summer-Fashion-Design-Clothing-Manufacturer-Lantern-Long-Sleeve.html">
                                                    Shein Womens Clothing 2021 Summer Fashion Design C
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$189.78</del>

                                                $144.83
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                    <div class="slider-item">
                                    <div class="product-card ">
                                        <div class="product-thumb">
                                                                                                                                    <div class="product-badge product-badge2 bg-info"> -29%</div>
                                                                                        <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135412IgjH98f42eece72a4cf3980c64ab58dbfd890.jpg" alt="Product">
                                            <div class="product-button-group"><a class="product-button" href="user/wishlist/store/531.json" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a data-target="http://127.0.0.1:8000/compare/product/531" class="product-button product_compare" href="javascript:;" title="Compare"><i class="icon-repeat"></i></a>
                                                <a class="product-button add_to_single_cart"  data-target="531" href="javascript:;"  title="To Cart"><i class="icon-shopping-cart"></i>
    </a>
                                                </div>
                                        </div>
                                        <div class="product-card-inner">
                                            <div class="product-card-body">

                                                <div class="product-category"><a href="catalog50ca.html?category=Women-Clothing">Women Clothing</a></div>
                                                <h3 class="product-title"><a href="product/Women-Women-Fall------Women-Clothes-Backless-Halter-Dress-Casual-Jersey-Dress-Mini-Sexy-Knit-Dress.html">
                                                    Women Women Fall 2021 Women Clothes Backless Halte
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$189.78</del>

                                                $144.83
                                                </h4>
                                                                                                <div class="countdown countdown-alt mb-3" data-date-time="02/02/2022">
                                                </div>
                                                                                            </div>

                                        </div>
                                    </div>
                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="flash-sell-area mt-50">
            <div class="container">
                <div class="row gx-3 justify-content-center">
                                        <div class="col-xl-4 col-lg-6">
                        <div class="section-title">
                            <h2 class="h3">Web Themes &amp; Templates</h2>
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/fgcBest-Online-Wholesale-Website-Design-and-development-company--Ecommerce-shopping-webdesign8q.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341344113y6Ucc4d26e9889041dc899c3522859ed3f88.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/fgcBest-Online-Wholesale-Website-Design-and-development-company--Ecommerce-shopping-webdesign8q.html">
                                                    Best Online Wholesale Website Design and
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$70.00</del>
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Create-a-Wordpress-Website-Designers-Ecommerce--Multivendor-Website-Software.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134428tuCU4431f054a85341a5a36101d8df36f90a7.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Create-a-Wordpress-Website-Designers-Ecommerce--Multivendor-Website-Software.html">
                                                    Create a Wordpress Website Designers Eco
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/qzswordpress-shopify-Start-Your-Own-eCommerce-Site-Create-Your-Online-Store-Today-online-store-websit5l.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134442OSWHf435248807dd438aaf4d8a53e6f7eaedP.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/qzswordpress-shopify-Start-Your-Own-eCommerce-Site-Create-Your-Online-Store-Today-online-store-websit5l.html">
                                                    wordpress shopify Start Your Own eCommer
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$70.00</del>
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Website-Development-Payment-Gateway-Website-Online-Business-Webdesign-Responsive.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341344598AFHd8e8ee6b580644beba14f0866d6a1269l.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Website-Development-Payment-Gateway-Website-Online-Business-Webdesign-Responsive.html">
                                                    Website Development Payment Gateway Webs
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$70.00</del>
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/e0ACustom-Website-Builder-Shopping-Website-Design-and-DevelopmenthV.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134470aUCH32e77b35ed3e4f359723b0893abdf333y.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/e0ACustom-Website-Builder-Shopping-Website-Design-and-DevelopmenthV.html">
                                                    Custom Website Builder Shopping Website
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$70.00</del>
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Wordpress-Ecommerce-Online-Store-B-C-Online-Shop-Website-Design-Business-Online-Website.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341344897saU32feef72859d4a018dc33710b3647992j.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Wordpress-Ecommerce-Online-Store-B-C-Online-Shop-Website-Design-Business-Online-Website.html">
                                                    Wordpress Ecommerce Online Store B2C Onl
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$70.00</del>
                                                                                                    $35.00
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                            </div>

                        </div>
                    </div>
                                        <div class="col-xl-4 col-lg-6">
                        <div class="section-title">
                            <h2 class="h3">Beauty &amp; Personal Care</h2>
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Td5BREYLEE-facial-mask-hyaluronic-acid-facial-firming-mask-beautyca.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Td5BREYLEE-facial-mask-hyaluronic-acid-facial-firming-mask-beautyca.html">
                                                    BREYLEE facial mask hyaluronic acid faci
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star filled'></i><i class = 'far fa-star filled'></i><i class = 'far fa-star filled'></i><i class = 'far fa-star filled'></i><i class = 'far fa-star filled'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/p5lHome-Use-Beauty-Device-Face-Massager-Facial-Lifting-Tool-Beauty-AntiAgingbD.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134210aEUHTB1K4CyX6DuK1Rjy1zjq6zraFXaj.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/p5lHome-Use-Beauty-Device-Face-Massager-Facial-Lifting-Tool-Beauty-AntiAgingbD.html">
                                                    Home Use Beauty Device Face Massager Fac
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/sEcLatex-free-makeup-sponge-Customized-beauty-make-up-blender-makeup-spongpD.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134231tV8HTB1HSCEe25G3KVjSZPxq6zI3XXao.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/sEcLatex-free-makeup-sponge-Customized-beauty-make-up-blender-makeup-spongpD.html">
                                                    Latex free makeup sponge Customized beau
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Beauty-Beauty-Anti-wrinkle-USB-Charging-Neck-Wrinkle-Removal-Neck-Care.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/163413424721nHe4cca751c6c94532958892118104e47ck.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Beauty-Beauty-Anti-wrinkle-USB-Charging-Neck-Wrinkle-Removal-Neck-Care.html">
                                                    Beauty Beauty Anti-wrinkle USB Charging
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Mini-Electric-Silicone-Face-Brush-Massager-Cepillo-Facial-Beautiful-Silicone-Facial-Cleansing-Brush.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134262rpfHdee8e662b5c747d69275ffd10450d8c1u.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Mini-Electric-Silicone-Face-Brush-Massager-Cepillo-Facial-Beautiful-Silicone-Facial-Cleansing-Brush.html">
                                                    Mini Electric Silicone Face Brush Massag
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/CGtFace-Lift-Band-Facial-Beauty-Slimming-Double-Chin-Bandage-Strap-Weight1U.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134273FQVHcfd42cbddf7b40b08d3f9048f4d425e5A.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/CGtFace-Lift-Band-Facial-Beauty-Slimming-Double-Chin-Bandage-Strap-Weight1U.html">
                                                    Face Lift Band Facial Beauty Slimming Do
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Mask-stick-to-your-face-moisture-skin-care-clay-facial-natural-moisturiser-low-moq.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341342918rPHabf8df421e5b4d99b802fc6120d050a7N.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Mask-stick-to-your-face-moisture-skin-care-clay-facial-natural-moisturiser-low-moq.html">
                                                    Mask stick to your face moisture skin ca
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Korean-Beauty-Organic-Brightening-Peel-off-Hyaluronic-Acid-Facial-Jelly-Powder.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134515gdzH8064fa369ca644958a52846035a40641p.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Korean-Beauty-Organic-Brightening-Peel-off-Hyaluronic-Acid-Facial-Jelly-Powder.html">
                                                    Korean Beauty Organic Brightening Peel o
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/OEM-ODM-Fullerene-essence-best-face-moisturizer-whitening-anti-aging-cream.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134534qTHH1575ae72d5e144cfbf237196d6ea139bj.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/OEM-ODM-Fullerene-essence-best-face-moisturizer-whitening-anti-aging-cream.html">
                                                    OEM ODM Fullerene essence best face mois
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/AMEIZII-Beauty-And-Personal-Care-Face-Skin-Masks-Nose-Blackhead-Remover.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341345587a1H6e71ffd70a134245aaab2261bf685508j.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/AMEIZII-Beauty-And-Personal-Care-Face-Skin-Masks-Nose-Blackhead-Remover.html">
                                                    AMEIZII Beauty And Personal Care Face Sk
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,893.26</del>
                                                                                                    $1,362.81
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                            </div>

                        </div>
                    </div>
                                        <div class="col-xl-4 col-lg-6">
                        <div class="section-title">
                            <h2 class="h3">Electronics</h2>
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/DC------DSLR-support---G-sd-card-video-camera----Mega-pixels-digital-camera-dslr-HD-professional.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134811DFfH349db6b6a70c4604b507c446a7b06ae5k.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/DC------DSLR-support---G-sd-card-video-camera----Mega-pixels-digital-camera-dslr-HD-professional.html">
                                                    DC-7200 DSLR support 32G sd card video c
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                    $1,352.81
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Dropshipping-EIS-----inch-LCD-Full-HD----P-Recording-----Mega-HD-DV-SLR-Camera.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134831EzTH75345266923349e280d5f5e5fd5c71e5a.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Dropshipping-EIS-----inch-LCD-Full-HD----P-Recording-----Mega-HD-DV-SLR-Camera.html">
                                                    Dropshipping EIS 2.4 inch LCD Full HD 72
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$189.78</del>
                                                                                                    $134.83
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Wholesale-Price-----Mega-HD-DV-SLR-Camera------inch-LCD-Full-HD----P-Recording--EIS--Supply-Drops.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134872KxvHTB1BqH4aIfrK1RkSmLyq6xGApXaJ.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Wholesale-Price-----Mega-HD-DV-SLR-Camera------inch-LCD-Full-HD----P-Recording--EIS--Supply-Drops.html">
                                                    Wholesale Price 1.3 Mega HD DV SLR Camer
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$167.30</del>
                                                                                                    $156.07
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/New-product------Refurbished-used-smart-phone-for-I-phone-XS-MAX-XR---GB----GB--G.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134888WQ3H624bc94495584b2384c07e2db9f2bdfcd.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/New-product------Refurbished-used-smart-phone-for-I-phone-XS-MAX-XR---GB----GB--G.html">
                                                    New product 2019 Refurbished used smart
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,348.31</del>
                                                                                                    $932.58
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                                    <div class="slider-item">
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Cheap-Price-Mobile-Phones-i---Pro----inch-FHD-Big-Screen-Smart-Phone-------GB.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134904Sy7H220c85b541d145789e167a4b23787dd5h.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Cheap-Price-Mobile-Phones-i---Pro----inch-FHD-Big-Screen-Smart-Phone-------GB.html">
                                                    Cheap Price Mobile Phones i13 Pro 6.6inc
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,460.67</del>
                                                                                                    $1,235.96
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/Hot-Selling-s----Unlocked-----MP---Core-Dual-SIM--G---G-Cheap-Smart-Phone-----inch.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/16341349201T0Ha04a8a2d450544c9a80996bcdd70c543b.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/Hot-Selling-s----Unlocked-----MP---Core-Dual-SIM--G---G-Cheap-Smart-Phone-----inch.html">
                                                    Hot Selling s10+ Unlocked 8+16MP 8 Core
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$189.78</del>
                                                                                                    $134.83
                                                </h4>
                                            </div>
                                        </div>
                                                                                <div class="product-card p-col">
                                            <a class="product-thumb" href="product/UMIDIGI-A--Pro-Android-Mobile-Phone--g---MP-Quad-Camera------FHD--Full-Screen--GB-RAM.html">

                                                <img class="lazy" data-src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134938VjgHcb62dec2d6a241fc90ce2bb04059684em.jpg" alt="Product"></a>
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="product/UMIDIGI-A--Pro-Android-Mobile-Phone--g---MP-Quad-Camera------FHD--Full-Screen--GB-RAM.html">
                                                    UMIDIGI A9 Pro Android Mobile Phone 4g 4
                                                </a></h3>
                                                <div class="rating-stars">
                                                    <i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i><i class = 'far fa-star'></i>
                                                </div>
                                                <h4 class="product-price">
                                                                                                <del>$1,910.11</del>
                                                                                                    $1,573.03
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

            <div class="bannner-section mt-50">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-6">

                        @foreach ($genius_banner3 as $genius_banners3)
                        @if ($genius_banners3->img_id == "1")
                            
                       
                        <a href="#" class="genius-banner">
                  <img class="lazy" src="{{ asset('uploads') }}/{{$genius_banners2->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                 
                    <div class="col-md-6">

                        @foreach ($genius_banner3 as $genius_banners3)
                        @if ($genius_banners3->img_id == "2")
                            
                       
                        <a href="#" class="genius-banner">
                  <img class="lazy" src="{{ asset('uploads') }}/{{$genius_banners2->photo}}"  alt="">
        <div class="inner-content">

                                              <p>50% OFF</p>

                                            <h4>Watch</h4>
                                        </div>
    </a>
    @endif
    @endforeach
                
                          
                          
                    </div>
                </div>
            </div>
        </div>

            <section class="selected-product-section featured_cat_sec sps-two mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">Featured Categories</h2>
                            <div class="links" id="foo">
                <a class="category_get active" data-target="feature_category_view"  data-href="/Women-Clothing/feature_category/normal" href="javascript:;" class="active">Women Clothing</a>
                <a class="category_get " data-target="feature_category_view"  data-href="/Women-Clothing/feature_category/normal"href="javascript:;" class="">Web Themes &amp; Templates</a>
                <a class="category_get " data-target="feature_category_view"  data-href="/Women-Clothing/feature_category/normal" href="javascript:;" class="">Electronics</a>
                <a class="category_get " data-target="feature_category_view" data-href="/Women-Clothing/feature_category/normal" href="javascript:;" class="">Beauty &amp; Personal Care</a>
            </div>
                        </div>
                    </div>
                </div>
                <div class="feature_category_view d-none">
                    <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/ajax_loader.gif" alt="">
                </div>
                <div class="row g-3" id="feature_category_view">
                                       
                                      
                         
                                                                          
                                      

                </div>
            </div>
        </section>



            <section class="brand-section mt-30 mb-60">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title">
                            <h2 class="h3">Popular Brands</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                                                        <div class="slider-item">
                                <a class="text-center" href="catalog4c54.html?brand=Adidas">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336527add.png"
                                        alt="Adidas" title="Adidas">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalogd1fb.html?brand=Lavie">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336517leves.jpg"
                                        alt="Lavie" title="Lavie">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalog6e7b.html?brand=Skyart">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336538skyart.png"
                                        alt="Skyart" title="Skyart">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="cataloge327.html?brand=Nike">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336489nike.jpg"
                                        alt="Nike" title="Nike">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalog4ad2.html?brand=Samsung">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336479samsung.png"
                                        alt="Samsung" title="Samsung">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalog33dc.html?brand=Yamaha">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336551yamaha.png"
                                        alt="Yamaha" title="Yamaha">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalogd4ed.html?brand=HM">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336576hm.jpg"
                                        alt="H.M" title="H.M">
                                </a>
                            </div>
                                                        <div class="slider-item">
                                <a class="text-center" href="catalog99f3.html?brand=Loreal">
                                    <img class="d-block hi-50 lazy"
                                    data-src="assets/images/1632336591lora.jpg"
                                        alt="Loreal" title="Loreal">
                                </a>
                            </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="service-section">
            <div class="container">
                <div class="row">
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/162196463701.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Free Worldwide Shipping</h6>
                                    <p class="text-sm text-muted mb-0">Free shipping for all orders over $100 Contrary to popular belie</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/162196467602.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Money Back Guarantee</h6>
                                    <p class="text-sm text-muted mb-0">We return money within 30 days</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="	https://geniusdevs.com/codecanyon/omnimart40/assets/images/162196471103.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">24/7 Customer Support</h6>
                                    <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="	https://geniusdevs.com/codecanyon/omnimart40/assets/images/162196474904.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Secure Online Payment</h6>
                                    <p class="text-sm text-muted mb-0">We posess SSL / Secure Certificate</p>
                                </div>
                            </div>
                        </div>
                                    </div>
            </div>
        </section>


<script>


catshow();
    popshow();
    proshow();

    
</script>





@stop
