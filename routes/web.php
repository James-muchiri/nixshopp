<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('/', 'ShopController@index')->name('index');
Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/filter', 'ShopController@filter')->name('filter');
Route::get('/brands', 'ShopController@brands');
Route::get('/brands/{data}', 'ShopController@brandshow');
Route::get('/campaign', 'ShopController@campaign');


Route::get('/Women-Clothing/feature_category/normal', 'ShopController@normal');
Route::get('/get/Women-Clothing/popular_category/slider', 'ShopController@slider');
Route::get('get/type/feature', 'ShopController@mixed');


//login routes           getadminSignIn

Route::get('/user/login', 'ShopController@getusersignIn')->name('getadminSignIn');
Route::get('/user/logout', 'Auth\LoginController@usersignOut');


Route::post('/user/userlogin', 'Auth\LoginController@usersignIn');
Route::post('/user/user_register', 'ShopController@store_user_reg');

//after login routes
Route::get('/user/dashboard', 'ShopController@dashboard');
Route::get('/user/wishlists', 'ShopController@wishlist')->name('wishlist');
Route::get('/user/profile', 'ShopController@profile');
Route::get('/user/orders', 'ShopController@orders');
Route::get('/user/tickets', 'ShopController@tickets');
Route::get('/user/storewishlists/{dataId}', 'ShopController@storeWishlist');
Route::get('/user/fetchwishlists', 'ShopController@fetchWishlist');
Route::get('/user/countwishlists', 'ShopController@countWishlist');
Route::get('/user/removewishlists/{dataId}', 'ShopController@removeWishlist');
Route::get('/user/wishlist/deleteall', 'ShopController@deleteWishlist');

Route::post('/user/profile/update', 'ShopController@profile_update');




// compare routes 
Route::get('/compare', 'ShopController@compare')->name('compare'); //compare view
Route::get('/compare/product/{dataId}', 'ShopController@compare_product')->name('compare_product');//add product
Route::get('/compare/product_remove/{dataId}', 'ShopController@compare_product_remove')->name('compare_product_remove');//remove product
Route::get('/compare/product', 'ShopController@compare_product1')->name('compare_product1'); //fetch compare list
Route::get('/compare/product_kill', 'ShopController@compare_product_kill')->name('compare_product_kill'); // compare list kill


//cart routes

Route::get('/product/cart', 'ShopController@product_cart')->name('cart'); //cart view
Route::get('/cart/product/{dataId}', 'ShopController@cart_product')->name('cart_product');//add product
Route::get('/cart/product_remove/{dataId}', 'ShopController@cart_product_remove')->name('cart_product_remove');//remove product
Route::get('/cart/product', 'ShopController@cart_product1')->name('cart_product1'); //fetch cart list
Route::get('/cart/product_kill', 'ShopController@cart_product_kill')->name('cart_product_kill'); // cart list kill
Route::get('/cart/product/addByOne/{dataId}', 'ShopController@addByOne')->name('addByOne');//add product by one
Route::get('/cart/product/reduceByOne/{dataId}', 'ShopController@reduceByOne')->name('reduceByOne');//remove  product by one








Route::get('/admin', 'AdminController@index')->name('admin');




Route::get('/admin/slider', 'AdminController@slider')->name('slider');
Route::get('/admin/slider/create', 'AdminController@slider_create')->name('slider-create');
Route::post('/admin/slider_sibmit', 'AdminController@slider_sibmit')->name('slider_sibmit');
Route::get('/admin/Banner', 'AdminController@Banner')->name('Banner');
Route::post('/admin/heroimg1', 'AdminController@heroimg1')->name('heroimg1');
Route::post('/admin/heroimg2', 'AdminController@heroimg2')->name('heroimg2');
Route::post('/admin/3banner1', 'AdminController@a3banner1')->name('3banner1');
Route::post('/admin/3banner2', 'AdminController@a3banner2')->name('3banner2');
Route::post('/admin/3banner3', 'AdminController@a3banner3')->name('3banner3');
Route::post('/admin/3-column-banner-Second1', 'AdminController@column_banner_Second1')->name('3-column-banner-Second1');
Route::post('/admin/3-column-banner-Second2', 'AdminController@column_banner_Second2')->name('3-column-banner-Second2');
Route::post('/admin/3-column-banner-Second3', 'AdminController@column_banner_Second3')->name('3-column-banner-Second2');
Route::post('/admin/2-column-banner1', 'AdminController@a2_column_banner1');
Route::post('/admin/2-column-banner2', 'AdminController@a2_column_banner2');


Route::get('/admin/category/{dataid}/edit', 'AdminController@edit_category');
Route::get('/admin/category/delete/{dataid}', 'AdminController@categorydelete')->name('categorydelete');
Route::get('/admin/store-category', 'AdminController@store_category')->name('store-category');
Route::get('/admin/category', 'AdminController@category')->name('category');
Route::get('/admin/getcategory', 'AdminController@getcategory')->name('getcategory');
Route::get('/admin/cart_statusdisable/{dataid}', 'AdminController@cart_statusdisable');
Route::get('/admin/cart_statusenable/{dataid}', 'AdminController@cart_statusenable');
Route::get('/admin/getsubcategory', 'AdminController@getsubcategory');
Route::get('/admin/getchildcategory', 'AdminController@getchildcategory');

Route::post('/admin/store_editcategories', 'AdminController@store_editcategory_post');
Route::post('/admin/store_categories', 'AdminController@store_category_post');
Route::get('/admin/store-subcategory', 'AdminController@store_subcategory')->name('store-subcategory');
Route::get('/admin/subcategory', 'AdminController@subcategory')->name('subcategory');
Route::post('/admin/store_subcategories', 'AdminController@store_subcategory_post');

Route::get('/admin/store-childcategory', 'AdminController@store_childcategory')->name('store-childcategory');
Route::get('/admin/childcategory', 'AdminController@childcategory')->name('childcategory');
Route::post('/admin/store_childcategories', 'AdminController@store_childcategory_post');
Route::get('/admin/get_subcategories/{dataId}', 'AdminController@get_subcategories')->name('get_subcategories');
Route::get('/admin/get_childcategories/{dataId}', 'AdminController@get_childcategories')->name('get_childcategories');
Route::post('/admin/popular_cat_form', 'AdminController@popular_cat_form');
Route::post('/admin/featured_cat_form', 'AdminController@featured_cat_form');
Route::post('/admin/Three_column_category_form', 'AdminController@Three_column_category_form');


Route::get('/admin/product', 'AdminController@product')->name('product');
Route::get('/admin/getproducts', 'AdminController@getproducts')->name('getproducts');
Route::get('/admin/store-product', 'AdminController@store_product')->name('store-product');
Route::post('/admin/store_product', 'AdminController@store_product_post');
Route::get('/admin/getfeatured_product', 'AdminController@getfeatured_product');
Route::post('/admin/add_featured_product', 'AdminController@add_featured_product');
Route::get('/admin/getnew_arrival_product', 'AdminController@getnew_arrival_product');
Route::post('/admin/add_new_arrival_product', 'AdminController@add_new_arrival_product');
Route::get('/admin/gettop_product', 'AdminController@gettop_product');
Route::post('/admin/add_top_product', 'AdminController@add_top_product');
Route::get('/admin/getbest_product', 'AdminController@getbest_product');
Route::post('/admin/add_best_product', 'AdminController@add_best_product');

Route::get('/admin/brand', 'AdminController@brand')->name('brand');
Route::get('/admin/brand/create', 'AdminController@brand_create')->name('brand-create');
Route::post('/admin/store_brands', 'AdminController@store_brands');

Route::get('/admin/stock/out/product', 'AdminController@stock_out')->name('stock_out');
Route::get('/admin/campaign', 'AdminController@campaign')->name('campaign');
Route::get('/admin/featured', 'AdminController@featured')->name('featured');
Route::get('/admin/new-arrivals', 'AdminController@new_arrivals')->name('new-arrivals');
Route::get('/admin/top-products', 'AdminController@top_products')->name('top-products');
Route::get('/admin/best-products', 'AdminController@best_products')->name('best-products');
Route::get('/admin/flash-sales', 'AdminController@flash_sales')->name('flash-sales');
Route::get('/admin/d-o-w', 'AdminController@d_o_w')->name('d-o-w');

Route::get('/admin/review', 'AdminController@review')->name('review');
Route::get('/admin/orders', 'AdminController@orders')->name('orders');
Route::get('/admin/orders/Pending', 'AdminController@orders_Pending')->name('orders_Pending');
Route::get('/admin/orders/Progress', 'AdminController@orders_Progress')->name('orders_Progress');
Route::get('/admin/orders/Delivered', 'AdminController@orders_Delivered')->name('orders_Delivered');
Route::get('/admin/orders/Canceled', 'AdminController@orders_Canceled')->name('orders_Canceled');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
