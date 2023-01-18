
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="{{ asset('js/lazy.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lazy.plugin.js') }}"></script>
<script>

    function lazy (){
        $(".lazy").Lazy({
            beforeLoad: function(element) {
                var imageSrc = element.data('src');
                console.log('image "' + imageSrc + '" is about to be loaded');
            },
            scrollDirection: 'vertical',
            effect: "fadeIn",
            effectTime:1000,
            threshold: 0,
            visibleOnly: false,  
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });
    }
    
    lazy();
    </script>
    
    <!-- Shop Toolbar-->

    <div class="row g-3" id="main_div">


        @if ($products->count() > 1)
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
                                     <img class="lazy" src="{{ asset('uploads') }}/{{$product->image}}" alt="Product">
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
<div class="row mt-15" >
 <div class="col-lg-12 text-center" >
    <div id="pagination-container"></div>
</div>
</div>


<link rel="stylesheet" href="{{ asset('css/simplePagination.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery.simplePagination.js') }}"></script>
<script>

var items = $("#main_div .col-xxl-3");
    var numItems = items.length;
    var perPage = 12;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        visiblePages: 6,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });



</script>


