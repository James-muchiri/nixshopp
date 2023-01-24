<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use App\Category;
use App\Sub_Category;
use App\Child_Category;
use App\Brands;
use App\Slider;
use App\Products;
use App\Product_images;
use App\Banners;
use App\Popular_categories;
use App\Featured_categories;
use App\Three_column_category;
use App\Orders;
use App\Payments_notification;
use App\Product_specification;
use App\E_users;
use App\Campaigns;
use Response;
use Redirect;
class AdminController extends Controller
{
    //

    public function index()
    {



        $Orders = Orders::all();
        $Orderspending = Orders::where('status', 'pending')->get();
        $Ordersprocessing = Orders::where('status', 'processing')->get();
        $Orderscompleted = Orders::where('status', 'completed')->get();
        $Ordersdecline = Orders::where('status', 'decline')->get();
        $products = Products::all();
        $E_users = E_users::all();
        $Ordersrecent = Orders::limit(10)->get();  
    

        return view('admin.index', compact('Ordersrecent', 'E_users', 'products', 'Orders', 'Orderspending', 'Ordersprocessing','Orderscompleted', 'Ordersdecline'));
    }


    public function cache()
    {
    $exitCode = Artisan::call('route:cache'); 
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');


 return redirect()->back()->with('cache','deleted');
}


    public function  store_category()
    {
        return view('admin.add_category');
    }

    public function  store_category_post(Request $request){



        $fileName = $request->name.'_cp'.'.'.$request->file->extension();

        $request->file->move(public_path('uploads'), $fileName);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->meta_keywords = $request->meta_keywords;
        $category->meta_description = $request->meta_description;
        $category->photo =  $fileName;


        $category->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function  store_editcategory_post(Request $request){


        $category = Category::find($request->id);

        if($request->file){
            $fileName = $request->name.'_cp'.'.'.$request->file->extension();
            $request->file->move(public_path('uploads'), $fileName);
            $category->photo =  $fileName;
        }

      if($request->meta_keywords){
        $category->meta_keywords = $request->meta_keywords;

      }

      if($request->meta_description){
        $category->meta_description = $request->meta_description;

      }
        $category->name = $request->name;
        $category->slug = $request->slug;




        $category->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function  cart_statusdisable($dataId)
    {
        $category = Category::find($dataId);
        $category->status = "disabled";
        $category->save();



        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function  cart_statusenable($dataId)
    {
        $category = Category::find($dataId);
        $category->status = "enabled";
        $category->save();



        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  edit_category($dataid)
    {
        $category = Category::find($dataid);

        return view('admin.edit_category', compact('category'));
    }
    public function categorydelete($dataid)
    {
        $category = Category::find($dataid);
        $category->delete();

        return redirect()->route('category')->with('status','deleted');
    }
    public function    getcategory()
    {

        $category = Category::all();



        return response()->json([
            "status" => 200,
            "category" => $category,

        ]);


    }
    public function    getsubcategory()
    {

        $category = Sub_Category::all();



        return response()->json([
            "status" => 200,
            "category" => $category,

        ]);


    }

    public function    getchildcategory()
    {

        $category = Child_Category::all();



        return response()->json([
            "status" => 200,
            "category" => $category,

        ]);


    }
    public function  category()
    {

        $category = Category::all();
        return view('admin.category', compact('category'));
    }


    public function  store_subcategory()
    {

        $category = Category::all();
        return view('admin.add_sub_category', compact('category'));
    }

    public function  store_subcategory_post(Request $request){





        $category = new Sub_Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->category_id = $request->category_id;



        $category->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function  subcategory()
    {

        $sub_category = Sub_Category::all();
        return view('admin.sub_category', compact('sub_category'));
    }



    public function  store_childcategory()
    {

        $category = Category::all();
        return view('admin.add_child_category', compact('category'));
    }

    public function  store_childcategory_post(Request $request){





        $category = new Child_Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->category_id = $request->childcategory_id;
        $category->subcategory_id = $request->childsubcategory_id;



        $category->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  childcategory()
    {

        $sub_category = Sub_Category::all();
        return view('admin.child_category', compact('sub_category'));
    }

    public function  get_subcategories($dataId)
    {

        $sub_category = Sub_Category::where('category_id', $dataId)->get();
        return response()->json([
            "Sub_Category" => $sub_category,


        ]);
    }

    public function  product()
    {

        $category = Category::all();
        $brands = brands::all();
        return view('admin.all_product', compact('category', 'brands'));
    }


    public function  getproducts()
    {

        $Products = Products::all();
        return response()->json([
            "Products" => $Products,


        ]);
    }


    public function  getfeatured_product()
    {

        $Products = Products::where("type", "featured")->get();
        return response()->json([
            "Products" => $Products,


        ]);
    }



    public function  getnew_arrival_product()
    {

        $Products = Products::where("type", "new_arrival")->get();
        return response()->json([
            "Products" => $Products,


        ]);
    }

    public function  gettop_product()
    {

        $Products = Products::where("type", "top_products")->get();
        return response()->json([
            "Products" => $Products,


        ]);
    }
    public function  getbest_product()
    {

        $Products = Products::where("type", "best_products")->get();
        return response()->json([
            "Products" => $Products,


        ]);
    }

    public function  getCampaigns ()
    {

        $Campaigns = Campaigns::join('products', 'products.id','=','campaigns.product_id' )
        ->get(['products.*']);
        return response()->json([
            "Campaigns" => $Campaigns,        ]);

    



    }


    public function  add_featured_product(Request $request){


        $Products = Products::find($request->featured_item);
        $Products->type = "featured";
        $Products->save();

          return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);
    }
    public function  add_new_arrival_product(Request $request){


        $Products = Products::find($request->new_arrival_item);
        $Products->type = "new_arrival";
        $Products->save();

          return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);
    }

    public function  add_top_product(Request $request){


        $Products = Products::find($request->top_product_item);
        $Products->type = "top_products";
        $Products->save();

          return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);
    }
    public function  add_best_product(Request $request){


        $Products = Products::find($request->best_product_item);
        $Products->type = "best_products";
        $Products->save();

          return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);
    }


    public function  store_product()
    {

        $category = Category::all();
        $brands = brands::all();
        return view('admin.store_product', compact('category', 'brands'));
    }

    public function   brand()
    {
        $brands = brands::all();
        return view('admin.brands', compact('brands'));
    }

    public function   stock_out()
    {
        return view('admin.stocks_out');
    }
    public function   campaign()
    {


        


        return view('admin.campaign');
    }
    public function   review()
    {
        return view('admin.product_review');
    }
    public function   orders(Request $request){

        if($request->start_date){

            $from = $request->start_date;
            $to = $request->end_date;

            $orders = Orders::whereBetween('created_at', [$from, $to])->get();
       
        }
        else
        {
            $orders = Orders::all();
        }
   

        return view('admin.all_orders', compact('orders'));
    }
    public function   orders_Pending(Request $request)
    {

        if($request->start_date){

            $from = $request->start_date;
            $to = $request->end_date;

            $orders = Orders::whereBetween('created_at', [$from, $to])->get();
       
        }
        else
        {
            $orders = Orders::all();
        }
   

        return view('admin.pending_orders', compact('orders'));
   
    }
    public function   orders_Progress(Request $request)
    {
        
        if($request->start_date){

            $from = $request->start_date;
            $to = $request->end_date;

            $orders = Orders::whereBetween('created_at', [$from, $to])->get();
       
        }
        else
        {
            $orders = Orders::all();
        }
   

        return view('admin.progress_orders', compact('orders'));

    }

    public function   orders_Delivered(Request $request)
    {

        if($request->start_date){

            $from = $request->start_date;
            $to = $request->end_date;

            $orders = Orders::whereBetween('created_at', [$from, $to])->get();
       
        }
        else
        {
            $orders = Orders::all();
        }
   

        return view('admin.delivered_orders', compact('orders'));
    
    }

    public function   orders_Canceled(Request $request)
    {

        if($request->start_date){

            $from = $request->start_date;
            $to = $request->end_date;

            $orders = Orders::whereBetween('created_at', [$from, $to])->get();
       
        }
        else
        {
            $orders = Orders::all();
        }
   

        return view('admin.canceled_order', compact('orders'));
      
    }

    
    public function customerview($dataId)
    {

        $user = E_users::find($dataId);

        $order = Orders::where('e_users_id', $user->id)->get();
        $orders =  $order->count();
        return view('admin.customer_view', compact('user', 'orders'));
    }
    public function   invoice($dataId)
    {

        $order = Orders::find($dataId);
        return view('admin.invoice', compact('order'));
    }
    
    public function   transactions()
    {
        $transactions = Payments_notification::all();
        return view('admin.Transactions', compact('transactions'));
    }
    
    public function   customerlist()
    {
        $users = E_users::all();
        return view('admin.customer_list', compact('users'));
    }
    public function   brand_create()
    {
        return view('admin.add_brands');
    }


    public function store_brands(Request $request){



        $fileName = $request->name.'_br'.'.'.$request->photo->extension();

        $request->photo->move(public_path('uploads'), $fileName);

        $category = new Brands;
        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->photo =  $fileName;


        $category->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }


    public function  get_childcategories($dataId)
    {

        $sub_category = Child_Category::where('subcategory_id', $dataId)->get();
        return response()->json([
            "child_Category" => $sub_category,


        ]);
    }

    function random_strings($length_of_string)
    {
      
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      
        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result), 
                           0, $length_of_string);
    }



    public function store_product_post(Request $request){



        $fileName = $request->name.'_pr'.'.'.$request->photo->extension();

        $request->photo->move(public_path('uploads'), $fileName);


        



        $product = new Products;
        $product->category_id = $request->productcategory_id;
        $product->subcategory_id = $request->productsubcategory_id;
        $product->childcategory_id = $request->productchildcategory_id;
        $product->total_stock = $request->stock;
        $product->tax = $request->tax_id;
        $product->sku = $request->sku;
        $product->brand_id = $request->brand_id;
        $product->c_price = $request->discount_price;
        $product->p_price = $request->previous_price;
        $product->name = $request->name;
        $product->type = $request->type;
        $product->slug = $request->slug;
        $product->image = $fileName;
        $product->short = $request->sort_details;
        $product->description = $request->addproduct_details;
        $product->tags = $request->tags;
        $product->save();



        $files = $request->file('galleries');
        foreach($files as $file){
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $controler = new AdminController;
        $image_name =  $controler->random_strings(6)."_".$product->id.".".$extension;    

        $file->move(public_path('uploads'), $image_name);

        $product_image = new Product_images;
            $product_image->product_id = $product->id;
            $product_image->product_image = $image_name ;
            $product_image->save();

        }



        if($request->is_specification != null){

            //  $collection = collect($request->specification_name);
              $size = count($request->specification_name);
  
              for ($i = 0; $i < $size; $i++)
              {
                  $Product_specification = new Product_specification;
                  $Product_specification->specification = $request->specification_name[$i];
                  $Product_specification->description = $request->specification_description[$i];
                  $Product_specification->product_id = $product->id;
                  $Product_specification->save();
           
              }
  
          }
        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }


    public function   featured()
    {
        return view('admin.featured');
    }
    public function   new_arrivals()
    {
        return view('admin.new_arrival');
    }
    public function   top_products()
    {
        return view('admin.top_products');
    }
    public function   best_products()
    {
        return view('admin.best_products');
    }
    public function   flash_sales()
    {
        return view('admin.flash_sales');
    }
    public function   d_o_w()
    {
        return view('admin.d_o_w');
    }
    public function   slider()
    {
        $sliders = Slider::all();
        return view('admin.slider', compact('sliders'));
    }
    public function   slider_create()
    {

        $sliders = Slider::all();
        return view('admin.slider_create', compact('sliders'));
    }


    public function slider_sibmit(Request $request){



        $fileName = $request->title.'_logo'.'.'.$request->logo->extension();

        $request->logo->move(public_path('uploads'), $fileName);


        $fileName1 = $request->title.'_slider'.'.'.$request->photo->extension();

        $request->photo->move(public_path('uploads'), $fileName1);

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->logo = $fileName;
        $slider->link = $request->link;
        $slider->details = $request->details;
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function   Banner()
    {
        $category = Category::all();
        $header_banner1= Banners::where('banner', 'header banner')->where('img_id', 1)->first();
        $header_banner2= Banners::where('banner', 'header banner')->where('img_id', 2)->first();
        $banneer21= Banners::where('banner', '3banneer')->where('img_id', 1)->first();
        $banneer22= Banners::where('banner', '3banneer')->where('img_id', 2)->first();
        $banneer23= Banners::where('banner', '3banneer')->where('img_id', 3)->first();
        $banneer31= Banners::where('banner', 'column_banner_Second')->where('img_id', 1)->first();
        $banneer32= Banners::where('banner', 'column_banner_Second')->where('img_id', 2)->first();
        $banneer33= Banners::where('banner', 'column_banner_Second')->where('img_id', 3)->first();
        $banneer41= Banners::where('banner', 'a2_column_banner')->where('img_id', 1)->first();
        $banneer42= Banners::where('banner', 'a2_column_banner')->where('img_id', 2)->first();
        $cat1 = Popular_categories::where('category_level', '1')->first();
        $Popular_categories= "";
        if($cat1){
        $Popular_categories = Child_Category::where('id',  $cat1->childcategory_id)->first();
       
        }
        $cat2 = Popular_categories::where('category_level', '2')->first();
        $Popular_categories2= "";
        if($cat2){
        $Popular_categories2 = Child_Category::where('id',  $cat2->childcategory_id)->first();
       
        }
        $cat3 = Popular_categories::where('category_level', '3')->first();
        $Popular_categories3= "";
        if($cat3){
        $Popular_categories3 = Child_Category::where('id',  $cat3->childcategory_id)->first();
       
        }
        $cat4 = Popular_categories::where('category_level', '4')->first();
        $Popular_categories4= "";
        if($cat4){
        $Popular_categories4 = Child_Category::where('id',  $cat4->childcategory_id)->first();
       
        }


        $Threecat1 = Three_column_category::where('category_level', '1')->first();
        $Three_column_category= "";
        if($Threecat1){
        $Three_column_category = Child_Category::where('id',  $Threecat1->childcategory_id)->first();
       
        }
        $Threecat3 = Three_column_category::where('category_level', '3')->first();
        $Three_column_category3= "";
        if($Threecat3){
        $Three_column_category3 = Child_Category::where('id',  $Threecat3->childcategory_id)->first();
       
        }
        
        $Threecat2 = Three_column_category::where('category_level', '2')->first();
        $Three_column_category2= "";
        if($Threecat2){
        $Three_column_category2 = Child_Category::where('id',  $Threecat2->childcategory_id)->first();
       
        }

    
        
        $Featuredcat1 =     Featured_categories::where('category_level', '1')->first();
        $Featured_categories1= "";
        if($Featuredcat1){
            $Featured_categories1 = Child_Category::where('id',  $Featuredcat1->childcategory_id)->first();
       
        }
        $Featuredcat2 =     Featured_categories::where('category_level', '2')->first();
        $Featured_categories2= "";
        if($Featuredcat2){
            $Featured_categories2 = Child_Category::where('id',  $Featuredcat2->childcategory_id)->first();
       
        }
        $Featuredcat3 =     Featured_categories::where('category_level', '3')->first();
        $Featured_categories3= "";
        if($Featuredcat3){
            $Featured_categories3 = Child_Category::where('id',  $Featuredcat3->childcategory_id)->first();
       
        }
        $Featuredcat4 =     Featured_categories::where('category_level', '4')->first();
        $Featured_categories4= "";
        if($Featuredcat4){
            $Featured_categories4 = Child_Category::where('id',  $Featuredcat4->childcategory_id)->first();
       
        }


        return view('admin.Banner', compact('Featured_categories1', 'Featured_categories2', 'Featured_categories3', 'Featured_categories4', 'Three_column_category', 'Three_column_category2', 'Three_column_category3', 'Popular_categories','Popular_categories2','Popular_categories3','Popular_categories4', 'category', 'header_banner1', 'header_banner2', 'banneer21', 'banneer22', 'banneer23','banneer31', 'banneer32', 'banneer33','banneer41', 'banneer42'));
    }


    public function heroimg1(Request $request){

        $fileName1 = 'hero1'.'_banner'.'.'.$request->img1->extension();

        $request->img1->move(public_path('uploads'), $fileName1);

        $header_banner1= Banners::where('banner', 'header banner')->where('img_id', 1)->first();
        if($header_banner1){
            $header_banner1->delete();
        }

        $slider = new Banners;
        $slider->banner = $request->banner;
        $slider->title = $request->title1;
        $slider->subtitle = $request->subtitle1;
        $slider->url = $request->url1;
        $slider->img_id = "1";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);


    }




    public function heroimg2(Request $request){

        $fileName1 = 'hero2'.'_banner'.'.'.$request->img2->extension();

        $request->img2->move(public_path('uploads'), $fileName1);

        $header_banner2= Banners::where('banner', 'header banner')->where('img_id', 2)->first();
        if($header_banner2){
            $header_banner2->delete();
        }

        $slider = new Banners;
        $slider->banner = $request->banner;
        $slider->title = $request->title2;
        $slider->subtitle = $request->subtitle2;
        $slider->url = $request->url2;
        $slider->img_id = "2";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  a3banner1(Request $request){

        $fileName1 = '3banner'.'_banner'.'.'.$request->img1->extension();

        $request->img1->move(public_path('uploads'), $fileName1);

          $slider= Banners::where('banner', '3banneer')->where('img_id', 1)->first();
        if(  $slider){
            $slider->delete();
        }

        $slider = new Banners;
        $slider->banner = "3banneer";
        $slider->title = $request->title1;
        $slider->subtitle = $request->subtitle1;
        $slider->url = $request->firsturl1;
        $slider->img_id = "1";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  a3banner2(Request $request){

        $fileName1 = '3banner'.'_banner2'.'.'.$request->img2->extension();

        $request->img2->move(public_path('uploads'), $fileName1);


        $slider= Banners::where('banner', '3banneer')->where('img_id', 2)->first();
        if(  $slider){
            $slider->delete();
        } 
        $slider = new Banners;
        $slider->banner = "3banneer";
        $slider->title = $request->title2;
        $slider->subtitle = $request->subtitle2;
        $slider->url = $request->firsturl2;
        $slider->img_id = "2";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }  public function  a3banner3(Request $request){

        $fileName1 = '3banner'.'_banner3'.'.'.$request->img3->extension();

        $request->img3->move(public_path('uploads'), $fileName1);

        $slider= Banners::where('banner', '3banneer')->where('img_id', 3)->first();
        if(  $slider){
            $slider->delete();
        }

        $slider = new Banners;
        $slider->banner = "3banneer";
        $slider->title = $request->title3;
        $slider->subtitle = $request->subtitle3;
        $slider->url = $request->firsturl3;
        $slider->img_id = "3";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

    public function  column_banner_Second1(Request $request){

        $fileName1 = 'column_banner_Second1'.'_banner1'.'.'.$request->img1->extension();

        $request->img1->move(public_path('uploads'), $fileName1);

        $slider = new Banners;
        $slider->banner = "column_banner_Second";
        $slider->title = $request->title1;
        $slider->subtitle = $request->subtitle1;
        $slider->url = $request->url1;
        $slider->img_id = "1";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  column_banner_Second2(Request $request){

        $fileName1 = 'column_banner_Second2'.'_banner2'.'.'.$request->img2->extension();

        $request->img2->move(public_path('uploads'), $fileName1);

        $slider = new Banners;
        $slider->banner = "column_banner_Second";
        $slider->title = $request->title2;
        $slider->subtitle = $request->subtitle2;
        $slider->url = $request->url2;
        $slider->img_id = "2";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  column_banner_Second3(Request $request){

        $fileName1 = 'column_banner_Second3'.'_banner3'.'.'.$request->img3->extension();

        $request->img3->move(public_path('uploads'), $fileName1);

        $slider = new Banners;
        $slider->banner = "column_banner_Second";
        $slider->title = $request->title3;
        $slider->subtitle = $request->subtitle3;
        $slider->url = $request->url3;
        $slider->img_id = "3";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  a2_column_banner1(Request $request){

        $fileName1 = 'a2_column_banner1'.'_banner3'.'.'.$request->img1->extension();

        $request->img1->move(public_path('uploads'), $fileName1);

        $slider = new Banners;
        $slider->banner = "a2_column_banner";
        $slider->title = $request->title1;
        $slider->subtitle = $request->subtitle1;
        $slider->url = $request->url1;
        $slider->img_id = "1";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }
    public function  a2_column_banner2(Request $request){

        $fileName1 = 'a2_column_banner2'.'_banner2'.'.'.$request->img2->extension();

        $request->img2->move(public_path('uploads'), $fileName1);

        $slider = new Banners;
        $slider->banner = "a2_column_banner";
        $slider->title = $request->title2;
        $slider->subtitle = $request->subtitle2;
        $slider->url = $request->url2;
        $slider->img_id = "2";
        $slider->photo = $fileName1;
        $slider->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }



    public function  popular_cat_form(Request $request){



        $cat = new Popular_categories;
        $cat->category_level = "1";
        $cat->childcategory_id = $request->bannerchildcategory_id1;
        $cat->save();

        $cat = new Popular_categories;
        $cat->category_level = "2";
        $cat->childcategory_id = $request->bannerchildcategory_id2;
        $cat->save();

        $cat = new Popular_categories;
        $cat->category_level = "3";
        $cat->childcategory_id = $request->bannerchildcategory_id3;
        $cat->save();

        $cat = new Popular_categories;
        $cat->category_level = "4";
        $cat->childcategory_id = $request->bannerchildcategory_id4;
        $cat->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }



    public function  featured_cat_form(Request $request){



        $cat = new Featured_categories;
        $cat->category_level = "1";
        $cat->childcategory_id = $request->featuredchildcategory_id1;
        $cat->save();

        $cat = new Featured_categories;
        $cat->category_level = "2";
        $cat->childcategory_id = $request->featuredchildcategory_id2;
        $cat->save();

        $cat = new Featured_categories;
        $cat->category_level = "3";
        $cat->childcategory_id = $request->featuredchildcategory_id3;
        $cat->save();

        $cat = new Featured_categories;
        $cat->category_level = "4";
        $cat->childcategory_id = $request->featuredchildcategory_id4;
        $cat->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }




    public function  Three_column_category_form(Request $request){



        $cat = new Three_column_category;
        $cat->category_level = "1";
        $cat->childcategory_id = $request->threecolchildcategory_id1;
        $cat->save();

        $cat = new Three_column_category;
        $cat->category_level = "2";
        $cat->childcategory_id = $request->threecolchildcategory_id2;
        $cat->save();

        $cat = new Three_column_category;
        $cat->category_level = "3";
        $cat->childcategory_id = $request->threecolchildcategory_id3;
        $cat->save();



        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }



    
    public function customersave(Request $request, $dataId)
    {

        $user = E_users::find($dataId);


        if($request->email){
            $user->email = $request->email;
        }

        if($request->phone){
            $user->tel_no = $request->phone;
        }
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        return Redirect::back()->with('status','saved');
    }



    public function   subscribers()
    {
        return view('admin.subscribers');
    }   
    public function   subscribers_send_mail()
    {
        return view('admin.subscribers_send_mail');
    } 


    public function  campaignpost(Request $request){



        $product = Campaigns::where('product_id', $request->camp_id)->first();
        if($product){
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
    
            ]); 
        }
        else {
            
        $camp = new Campaigns;
        $camp->product_id = $request->camp_id;      
        $camp->save();

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

    }

}

}
