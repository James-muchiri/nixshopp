
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
     
   
   


    <div class="popular-category-slider owl-carousel " id="">
                
    
    @foreach ($product as $item)
           
    
<div class="slider-item">
            <div class="product-card">
                <div class="product-thumb">
                                                            <div class="product-badge product-badge2 bg-info"> -33%</div>
                                            <img class="lazy" alt="Product"     src="{{ asset('uploads') }}/{{$item->image}}"
                                                        style="">
                        <div class="product-button-group">
                            <a class="product-button wishlist_store" href="user/storewishlists/{{$item->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                                        <a data-target="/compare/product/{{$item->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                                        <a class="product-button add_to_single_cart" data-target="/cart/product/{{$item->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
                </a>
                            </div>
                </div>
                <div class="product-card-body">
                    <div class="product-category"><a href="//catalog?category=Women-Clothing">Women Clothing</a></div>
                    <h3 class="product-title"><a href="//product/0AENew-French-Elegant-White-Bubble-Sleeve-Party-Dress-Casual-ALine-Dresses-Long-Sleeve-DressesnC">
                        {{$item->name}}
                    </a></h3>
                    <div class="rating-stars">
                    <i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i><i class="far fa-star filled"></i>
                    </div>
                    <h4 class="product-price">
                                                <del>$500.78</del>
                                                $344.83
                        </h4>
                </div>

            </div>
        </div>
    
        @endforeach


     <!--   Core JS Files   -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>    
      
 
     <script type="text/javascript" src="{{ asset('js/extend.js') }}"></script>   

</div>