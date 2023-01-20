

		<!-- Sidebar -->
		<div class="sidebar">

			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('images/1634491069HTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
								</span>
							</a>
						</div>
					</div>

										<ul class="nav">

    <li class="nav-item">
        <a href="/admin">
            <i class="fa fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>

    <li class="nav-item">
        <a data-toggle="collapse" href="#category">
            <i class="fa fa-list-alt"></i>
            <p>Manage Categories</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="category">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/category">
                        <span class="sub-item">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/subcategory">
                        <span class="sub-item">Sub categories</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/childcategory">
                        <span class="sub-item">Child categories</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a data-toggle="collapse" href="#items">
            <i class="fa fa-product-hunt"></i>
            <p>Manage Products</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="items">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/brand">
                        <span class="sub-item">Brands</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/store-product">
                        <span class="sub-item">Add Product</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/product">
                        <span class="sub-item">All Products</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/stock/out/product">
                        <span class="sub-item">Stock Out Products</span>
                    </a>
                </li>
            
                <li>
                    <a class="sub-link" href="/admin/bulk/product/index">
                        <span class="sub-item">CSV Import &amp; Export</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/review">
                      <span class="sub-item">Product Reviews</span></a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a data-toggle="collapse" href="#offers">
            <i class="fa fa-product-hunt"></i>
            <p>Campaign Offers</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="offers">
            <ul class="nav nav-collapse">
                
                <li>
                    <a class="sub-link" href="/admin/featured">
                        <span class="sub-item">Featured Product</span>
                    </a>
                </li>
              
                {{-- <li>
                    <a class="sub-link" href="/admin/feadtured">
                        <span class="sub-item">Undefined Product</span>
                    </a>
                </li> --}}
                <li>
                    <a class="sub-link" href="/admin/new-arrivals">
                        <span class="sub-item">New Arrivals</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/top-products">
                        <span class="sub-item">Top Product</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/best-products">
                        <span class="sub-item">Best Product</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/flash-sales">
                        <span class="sub-item">Flash Sales</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/campaign">
                        <span class="sub-item">Deal of the week</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </li>

    <li class="nav-item ">
        <a data-toggle="collapse" href="#order">
            <i class="fa fa-first-order"></i>
            <p>Manage Orders </p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="order">
            <ul class="nav nav-collapse">
                <li class="">
                    <a class="sub-link" href="/admin/orders">
                        <span class="sub-item">All Orders</span>
                    </a>
                </li>
                <li class="">
                    <a class="sub-link" href="/admin/orders/Pending">
                        <span class="sub-item">Pending Orders</span>
                    </a>
                </li>
                <li class="">
                    <a class="sub-link" href="/admin/orders/Progress">
                        <span class="sub-item">Progress Orders</span>
                    </a>
                </li>

                <li class="">
                    <a class="sub-link" href="/admin/orders/Delivered">
                        <span class="sub-item">Delivered Orders</span>
                    </a>
                </li>
                <li class="">
                    <a class="sub-link" href="/admin/orders/Canceled">
                        <span class="sub-item">Canceled Orders</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a  href="/admin/transactions">
            <i class="fa fa-random"></i>
          <p>Transactions</p>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a data-toggle="collapse" href="#ecommerce">
            <i class="fa fa-newspaper"></i>
            <p>Ecommerce</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="ecommerce">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/code">
                      <span class="sub-item">Set Coupons</span></a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/shipping">
                        <span class="sub-item">Shipping</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/state">
                        <span class="sub-item">State</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/tax">
                        <span class="sub-item">Tax</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/currency">
                        <span class="sub-item">Currency</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/setting/payment">
                        <span class="sub-item">Payment</span>
                    </a>
                </li>
            </ul>
        </div>
    </li> --}}

    <li class="nav-item">
        <a href="/admin/customer">
          <i class="fa fa-users"></i>
          <p>Customer List</p></a>
    </li>
    <li class="nav-item">
        <a href="/admin/ticket">
            <i class="fa fa-comments"></i>
          <p>Manages Tickets</p></a>
    </li>
    <li class="nav-item">
        <a data-toggle="collapse" href="#content">
            <i class="fa fa-tasks"></i>
            <p>Manage Site</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="content">
            <ul class="nav nav-collapse">
                {{-- <li>
                    <a class="sub-link" href="/admin/setting/system">
                        <span class="sub-item">General Settings</span>
                    </a>
                </li> --}}
                <li>
                    <a class="sub-link" href="/admin/Banner">
                        <span class="sub-item">Home Page Banners</span>
                    </a>
                </li>
                <li>
                    <a  class="sub-link" href="/admin/slider">
                        <span class="sub-item">Sliders</span>
                    </a>
                </li>

                {{-- <li>
                    <a class="sub-link" href="/admin/service">
                        <span class="sub-item">Services</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a class="sub-link" href="/admin/setting/section">
                        <span class="sub-item">Visibility</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a class="sub-link" href="/admin/setting/social">
                        <span class="sub-item">Social Login</span>
                    </a>
                </li> --}}

                <li>
                    <a class="sub-link" href="/admin/setting/email">
                        <span class="sub-item">Email Settings</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/setting/configuration/sms">
                        <span class="sub-item">SMS Settings</span>
                    </a>
                </li>
               

      
            </ul>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a data-toggle="collapse" href="#faqs">
            <i class="fa fa-question-circle"></i>
            <p>Manage Faqs</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="faqs">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/fcategory">
                        <span class="sub-item">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/faq">
                        <span class="sub-item">Faqs</span>
                    </a>
                </li>
            </ul>
        </div>
    </li> --}}

    {{-- <li class="nav-item">
        <a data-toggle="collapse" href="#post">
            <i class="fa fa-rss-square"></i>
            <p>Manage Blogs</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="post">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/bcategory">
                        <span class="sub-item">Categories</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/post">
                        <span class="sub-item">Blogs</span>
                    </a>
                </li>
            </ul>
        </div>
    </li> --}}
    {{-- <li class="nav-item">
        <a href="/admin/page">
            <i class="fa fa-book"></i>
            <p>Manages Pages</p>
        </a>
    </li> --}}


    <li class="nav-item">
        <a href="/admin/subscribers">
            <i class="fa fa-telegram"></i>
            <p>Subscribers List</p>
        </a>
    </li>

    <li class="nav-item">
        <a data-toggle="collapse" href="#user">
            <i class="fa fa-user"></i>
            <p>System User</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="user">
            <ul class="nav nav-collapse">
                <li>
                    <a class="sub-link" href="/admin/role">
                        <span class="sub-item">Role</span>
                    </a>
                </li>
                <li>
                    <a class="sub-link" href="/admin/staff">
                        <span class="sub-item">System User</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <!--<li class="nav-item">-->
    <!--    <a data-toggle="collapse" href="#backup">-->
    <!--        <i class="fa fa-hdd"></i>-->
    <!--        <p>Systeam Backup</p>-->
    <!--        <span class="caret"></span>-->
    <!--    </a>-->
    <!--    <div class="collapse" id="backup">-->
    <!--        <ul class="nav nav-collapse">-->
    <!--            <li>-->
    <!--                <a class="sub-link" href="#">-->
    <!--                    <span class="sub-item">System Backup</span>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--            <li>-->
    <!--                <a class="sub-link" href="#">-->
    <!--                    <span class="sub-item">Database Backup</span>-->
    <!--                </a>-->
    <!--            </li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</li>-->

    <li class="nav-item">
        <a href="/cache/clear">
            <i class="fa fa-broom"></i>
            <p>Cache Clear</p>
        </a>
    </li>

</ul>
					    
				</div>
			</div>
		</div>
		<!-- End Sidebar -->