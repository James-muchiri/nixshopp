@extends('layouts.index')

@section('content')


<div class="page-title">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a> </li>
                <li class="separator"></li>
                <li>Compare Products</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- Page Content-->

  @if ($compare_count == 0)
      
 
  <div class="container padding-bottom-3x mb-1">
        <div class="card">
            <div class="card-body">
                <div class="comparison-table">
                    <table class="table table-bordered">

                      <tbody>
                                                    <tr>
                              <td class="text-center"><strong>Product not found</strong></td>
                          </tr>
                                                 </tbody>



                    </table>
                  </div>
            </div>
        </div>
  </div>

  @else
      
  

  <div class="container padding-bottom-3x mb-1">
    <div class="card">
        <div class="card-body">
                         <div class="container">

                <div class="row">
                    <div class="col">
                        <div class="comparison-table">
<table>
                        <tbody>
                            <tr class="bg-secondary">
                                <th class="text-uppercase">Summary</th>
                            </tr>
                            <tr>
                            <td>
                                <h6>
                                    Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual pro
                                </h6>
                                  <p><b>Brand</b> :  
                                     , <b>Price</b> :  $1,362.81
                                </p>
      
                                  <hr>
                                  <h6 class="mt-2">
                                    Shirts Menshirts Mens Cotton Shirt Factory Direct Various Style Customization
                                </h6>
                                  <p><b>Brand</b> :  
                                    , <b>Price</b> :  $1,362.81</p>
                                </td>
                               
                               </tr>

                               
                        </tbody>
                    </table>
                        </div>
                    </div>


                    @foreach ($compare_product_d as $value)
                   
                    <div class="col">
                        <div class="comparison-table">
                        <table class="table table-bordered">

                            <tbody>
                                                          <tr class="bg-secondary">
                                                         
                                   
                                                            <td colspan="2"> <span class="text-medium">  {{$value->name}}</span></td>
          
                                                             
                                                             </tr>

                                                             <tr>
                                                           
                                                               
                                                                <td colspan="2"> 
                                                                <div class="comparison-item"><span class="remove-item compare_remove" data-href="/compare/product_remove/{{$value->id}}"><i class="fa fa-times"></i></span><a class="comparison-item-thumb" href="//product/Men-Shirt-Custom-Shirts-Hot-Sale-Men-Women-Polyester-Cotton-Long-Sleeve-Casual-pro"><img src="/images/1634134720QX6Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt="Image"></a><a class="comparison-item-title" href="//product/Men-Shirt-Custom-Shirts-Hot-Sale-Men-Women-Polyester-Cotton-Long-Sleeve-Casual-pro">Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual pro</a><a class="btn btn-outline-primary btn-sm add_to_single_cart" href="javascript:;" data-target="563">Add to Cart</a></div>
                                                              </td>
                                                               
                                                               
                                                                                         </tr>
                                      
                                                                                      <tr>
                                                                <th>Product Type:</th>
                                                                <td>                           Velvet elegant sleeveless evening dress
                                                                                                                                  </td>
                                                         
                                                             </tr>
                                                                                      <tr>
                                                                <th>Material:</th>
                                                                <td>
                                                                                                                                     Polyester / Spandex
                                                                                                                                  </td>
                                                  
                                                             </tr>
                                                                                      <tr>
                                                                <th>Lining Material:</th>
                                                                <td>
                                                                                                                                     Polyester
                                                                                                                                  </td>
                                                      
                                                             </tr>
                                                                                      <tr>
                                                                <th>Fabric Type:</th>
                                                                <td>
                                                                                                                                     Fleece
                                                                                                                                  </td>
                                                           
                                                             </tr>
                                                                                      <tr>
                                                                <th>Technics:</th>
                                                                <td>
                                                                                                                                     Plain dyed
                                                                                                                                  </td>
                                                            
                                                             </tr>
                                                                                      <tr>
                                                                <th>Decoration:</th>
                                                                <td>
                                                                                                                                     Sequins
                                                                                                                                  </td>
                                                     
                                                             </tr>
                                                                                      <tr>
                                                                <th>Size:</th>
                                                                <td>
                                                                                                                                     S/M/L
                                                                                                                                  </td>
                                                           
                                                             </tr>
                                                                                      <tr>
                                                                <th>Product Type:</th>
                                                         
                                                                <td>
                                                                                                                                      Velvet elegant sleeveless evening dress
                                                                                                                                  </td>
                                                             </tr>
                                                                                      <tr>
                                                                <th>Material:</th>
                                                           
                                                                <td>
                                                                                                                                      Polyester / Spandex
                                                                                                                                  </td>
                                                             </tr>
                                                                                      <tr>
                                                                <th>Lining Material:</th>
                                                              
                                                                <td>
                                                                                                                                      Polyester
                                                                                                                                  </td>
                                                             </tr>
                                                                                      <tr>
                                                                <th>Fabric Type:</th>
                                                                <td>
                                                                                                                                     Fleece
                                                                                                                                  </td>
                                                               
                                                             </tr>
                                                                                      <tr>
                                                                <th>Technics:</th>
                                                                <td>
                                                                                                                                     Plain dyed
                                                                                                                                  </td>
                                                        
                                                             </tr>
                                                                                      <tr>
                                                                <th>Decoration:</th>
                                                                <td>
                                                                                                                                     Sequins
                                                       
                                                             </tr>
                                                                                      <tr>
                                                                <th>Size:</th>
                                                        
                                                                <td>
                                                                                                                                      S/M/L
                                                                                                                                  </td>
                                                             </tr>
                                                                                      
                                                            <tr>
                                                               <th></th>
                                                                                            <td>
                                                                 <a class="btn btn-outline-primary btn-sm btn-block add_to_single_cart" href="javascript:;" data-target="563">Add to Cart</a>
                                                                </td>
                                      
                                                                  
                                      
                                                                                         </tr>
                                                      
                            </tbody>
                        </table>
                        </div>

                    </div>
              
               @endforeach


                </div>
              </div>
        </div>
    </div>
</div>


@endif

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


@stop
