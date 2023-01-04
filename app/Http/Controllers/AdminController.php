<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Sub_Category;
use App\Child_Category;
use App\Brands;
use App\Slider;
use App\Products;
use App\Banners;
use App\Popular_categories;
use App\Featured_categories;
use App\Three_column_category;
class AdminController extends Controller
{
    //

    public function index()
    {
        return view('admin.index');
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
    public function   orders()
    {
        return view('admin.all_orders');
    }
    public function   orders_Pending()
    {
        return view('admin.pending_orders');
    }
    public function   orders_Progress()
    {
        return view('admin.progress_orders');
    }

    public function   orders_Delivered()
    {
        return view('admin.delivered_orders');
    }

    public function   orders_Canceled()
    {
        return view('admin.canceled_order');
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
        $product->slug = $request->slug;
        $product->image = $fileName;
        $product->short = $request->sort_details;
        $product->description = $request->addproduct_details;
        $product->tags = $request->tags;
        $product->save();

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
        return view('admin.Banner', compact('category'));
    }


    public function heroimg1(Request $request){

        $fileName1 = 'hero1'.'_banner'.'.'.$request->img1->extension();

        $request->img1->move(public_path('uploads'), $fileName1);

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





}
