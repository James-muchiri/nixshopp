
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
                                    <div class="item" style="background-image: url('{{ asset('uploads')}}/{{$slider->photo}}');">
                                        
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
                                   

@php
    if($deal->c_price < $deal->p_price){
        $per = ($deal->c_price - $deal->p_price) / $deal->p_price * 100;
        $num = round($per);
echo  '<div class="product-badge product-badge2 bg-info"> '.$num.'%</div>';
    }
@endphp


                                    
                                                                        <img class="lazy" data-src="{{ asset('uploads') }}/{{$deal->image}}" alt="Product">
                                    <div class="product-button-group">
                                        <a class="product-button wishlist_store" href="user/storewishlists/{{$deal->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                                        <a data-target="/compare/product/{{$deal->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                                        <a class="product-button add_to_single_cart" data-target="/cart/product/{{$deal->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
                </a>
                                                                            </div>
                                </div>
                                    <div class="product-card-body">

                                        <div class="product-category"><a href="catalog2e44.html?category=men-clothing">{{$deal->child__categories_name}}</a></div>
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
                                                                                        <img class="lazy" data-src="/images/1634134738rC1H7e01b6c3e996405db8555c5e81c8ade0b.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                                                                                        <img class="lazy" data-src="/images/1634134831EzTH75345266923349e280d5f5e5fd5c71e5a.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                                                                                        <img class="lazy" data-src="/images/1634134904Sy7H220c85b541d145789e167a4b23787dd5h.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                                                                                        <img class="lazy" data-src="/images/1634134938VjgHcb62dec2d6a241fc90ce2bb04059684em.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                                                                                        <img class="lazy" data-src="/images/1634135382cOuUff4a9015ea454a79a2b9e3249bd2e19bg.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                                                                                        <img class="lazy" data-src="/images/1634135412IgjH98f42eece72a4cf3980c64ab58dbfd890.jpg" alt="Product">
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
                                                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
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
                   
                              @foreach($Three_column_categories  as $categories => $categoryItems)
                              <div class="row gx-3 justify-content-center">
                                        <div class="col-xl-12 col-lg-12">
                        <div class="section-title">
                            <h2 class="h3">{{$categories}}</h2>
                        </div>
                        <div class="main-content">
                            <div class="newproduct-slider owl-carousel">
                                                                   
                                                                        @foreach($categoryItems  as $post)
                                                                        <div class="slider-item">
                                                                            <div class="product-card">
                                                                                <div class="product-thumb">
                                                                                   
                                                                        
                                                                        @php
                                                                        if($post->c_price < $post->p_price){
                                                                        $per = ($post->c_price - $post->p_price) / $post->p_price * 100;
                                                                        $num = round($per);
                                                                        echo  '<div class="product-badge product-badge2 bg-info"> '.$num.'%</div>';
                                                                        }
                                                                        @endphp
                                                                        
                                                                        
                                                                                    
                                                                                                                        <img class="lazy" data-src="{{ asset('uploads') }}/{{$post->image}}" alt="Product">
                                                                                    <div class="product-button-group">
                                                                                        <a class="product-button wishlist_store" href="user/storewishlists/{{$post->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                                                        <a data-target="/compare/product/{{$post->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                                                                                        <a class="product-button add_to_single_cart" data-target="/cart/product/{{$post->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
                                                                        </a>
                                                                                                                            </div>
                                                                                </div>
                                                                                    <div class="product-card-body">
                                                                        
                                                                                        <div class="product-category"><a href="catalog2e44.html?category=men-clothing">{{$post->child__categories_name}}</a></div>
                                                                                        <h3 class="product-title"><a href="product/sxJShirts-Menshirts-Mens-Cotton-Shirt-Factory-Direct-Various-Style-CustomizationTf.html">
                                                                                            {{$post->name}}
                                                                                        </a></h3>
                                                                                        <div class="rating-stars">
                                                                                            <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
                                                                                        </div>
                                                                                        
                                                                        
                                                                                        <h4 class="product-price">
                                                                                            <del>Ksh {{$post->p_price}}</del>
                                                                        
                                                                                            Ksh {{$post->c_price}}
                                                                        </h4>
                                                                        
                                                                                    </div>
                                                                        
                                                                            </div>
                                                                        </div>
                                        @endforeach

                                 
                       

                                                            </div>

                        </div>
                    </div>
                </div>
                    @endforeach

                     
                    

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
                                @foreach ( $Featured_categories as $index => $Featured_category)
                                <a class="category_get {{ $index == 0 ? 'active' : '' }}"  data-target="feature_category_view"  data-href="/{{$Featured_category->childcategory_id}}/feature_category/normal" href="javascript:;" >{{$Featured_category->child__categories_name}}</a>
               
                                @endforeach
        </div>
                        </div>
                    </div>
                </div>
                <div class="feature_category_view d-none">
                    <img src="/images/ajax_loader.gif" alt="">
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
                            @foreach ($Brands as $brand)
                            <div class="slider-item">
                                <a class="text-center" href="catalog/?brand="{{$brand->name}}"">
                                    <img class="d-block hi-50 lazy"
                                  
                                    data-src="{{ asset('uploads') }}/{{$brand->photo}}" 
                                        alt="{{$brand->name}}" title="{{$brand->name}}">
                                </a>
                            </div>
                            @endforeach
                             
                            
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
                                <img src="/images/162196463701.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Free Worldwide Shipping</h6>
                                    <p class="text-sm text-muted mb-0">Free shipping for all orders over $100 Contrary to popular belie</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="/images/162196467602.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Money Back Guarantee</h6>
                                    <p class="text-sm text-muted mb-0">We return money within 30 days</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="	/images/162196471103.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">24/7 Customer Support</h6>
                                    <p class="text-sm text-muted mb-0">Friendly 24/7 customer support</p>
                                </div>
                            </div>
                        </div>
                                            <div class="col-lg-3 col-sm-6 text-center mb-30">
                            <div class="single-service single-service2">
                                <img src="	/images/162196474904.png" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2">Secure Online Payment</h6>
                                    <p class="text-sm text-muted mb-0">We posess SSL / Secure Certificate</p>
                                </div>
                            </div>
                        </div>
                                    </div>
            </div>
        </section>








@stop
