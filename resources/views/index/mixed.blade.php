


                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
  
  


    <div class="features-slider owl-carousel ">
               
   
   @foreach ($product as $item)
          
   
<div class="slider-item">
    <div class="product-card">
        <div class="product-thumb">
           

@php
if( $item->c_price <  $item->p_price){
$per = ( $item->c_price -  $item->p_price) /  $item->p_price * 100;
$num = round($per);
echo  '<div class="product-badge product-badge2 bg-info"> '.$num.'%</div>';
}
@endphp


            
                                                <img class="lazy" data-src="{{ asset('uploads') }}/{{ $item->image}}" alt="Product">
            <div class="product-button-group">
                <a class="product-button wishlist_store" href="user/storewishlists/{{ $item->id}}" title="Wishlist"><i class="fa fa-heart"></i></a>
                <a data-target="/compare/product/{{ $item->id}}" class="product-button product_compare" href="javascript:;" title="Compare"><i class="fa fa-repeat"></i></a>
                <a class="product-button add_to_single_cart" data-target="/cart/product/{{ $item->id}}" href="javascript:;" title="To Cart"><i  class="fa fa-cart-plus"></i>
</a>
                                                    </div>
        </div>
            <div class="product-card-body">

                <div class="product-category"><a href="/shop?category=men-clothing">{{ $item->child__categories_name}}</a></div>
                <h3 class="product-title"><a href="product/sxJShirts-Menshirts-Mens-Cotton-Shirt-Factory-Direct-Various-Style-CustomizationTf.html">
                    {{ $item->name}}
                </a></h3>
                <div class="rating-stars">
                    <i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i><i class = 'fa fa-star'></i>
                </div>
                

                <h4 class="product-price">
                    <del>Ksh {{ $item->p_price}}</del>

                    Ksh {{ $item->c_price}}
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