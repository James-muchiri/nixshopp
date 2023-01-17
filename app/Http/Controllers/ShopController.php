<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Slider;
use App\Banners;
use App\Category;
use App\Sub_Category;
use App\Child_Category;
use App\Products;
use App\Featured_categories;
use App\E_users;
use App\wishlist;
use App\Brands;
use App\Orders;
use App\Three_column_category;
use App\Http\Controllers\MpesaController;
class ShopController extends Controller
{
    //

    public function index()
    {

        $sliders = Slider::all();
        $header_banners= Banners::where('banner', 'header banner')->get();
        $genius_banner= Banners::where('banner', 'column_banner_Second')->get();
        $genius_banner2= Banners::where('banner', '3banneer')->get();
        $genius_banner3= Banners::where('banner', 'a2_column_banner')->get();
        $Featured_categories = Featured_categories::join('child__categories', 'child__categories.id','=','featured_categories.childcategory_id' )
        ->get(['child__categories.name as child__categories_name', 'featured_categories.*']);
        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();
        $Brands = Brands::all();
        $Three_column_categories = Three_column_category::join('child__categories', 'child__categories.id','=','three_column_categories.childcategory_id' )
        ->join('products', 'products.childcategory_id','=','three_column_categories.childcategory_id' )
        ->get(['child__categories.name as child__categories_name', 'products.*'])->groupBy('child__categories_name');


        $deals=Products::join('child__categories', 'child__categories.id','=','products.childcategory_id' )
        ->get(['child__categories.name as child__categories_name', 'products.*']);


       // return $Three_column_categories;
        return view('index.index', compact('sliders', 'sub_category', 'child_category',
        'header_banners', 'genius_banner', 'genius_banner2', 'deals',
         'genius_banner3', 'Featured_categories', 'category','Brands','Three_column_categories'

        ));
    }
    public function getusersignIn(Request $request)
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('auth.userlogin', compact('sub_category', 'child_category',
       'category'

        ));
    }

    public function dashboard()
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.dashboard', compact('sub_category', 'child_category',
        'category'

        ));
    }

    public function checkout()
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();
        $cart_product = session()->get('cart_product');
//return $cart_product;
        return view('index.checkout', compact('sub_category', 'child_category','cart_product',
        'category'

        ));
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


    public function checkout_store(Request $request)
    {


        $controler = new ShopController;
        $cart = session()->get('cart_product');


        $order = new  Orders;

            $order->names = $request->input('bill_first_name')." ".$request->input('bill_last_name');
            // $request->input('bill_last_name');
          
            $order->phone_number = $request->input('bill_phone');
            $order->email = $request->input('bill_email');
            $order->area = $request->input('bill_address1');
          //  $order->region = $request->input('bill_zip');
          $order->delivery_fee =0;
            $order->total = 20;
            $order->item_count = 5;
            $order->order_number = $controler->random_strings(8);
            $order->cart = serialize($cart);
            auth()->guard('e-users')->user()->orders()->save($order);
            session()->put('order_number',  $order->order_number);
        
            session()->forget('cart_product');
        


        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();
        $cart_product = Orders::where('order_number', $order->order_number)->first();

        return redirect()->route('make_payment');
    }



    public function make_payment()
    {


        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.checkout_store', compact('sub_category', 'child_category',
        'category'
    ));
    }

    public function orderremove()
    {

        $order_number = session()->get('order_number');

        $order = Orders::where('order_number', $order_number)->first();
        $order->delete();
        session()->forget('order_number');

        return redirect()->route('index');
    }
    public function paylater()
    {

        $order_number = session()->get('order_number');

       
        session()->forget('order_number');
        
        return redirect()->route('index');
    }

    
    
    public function wishlist()
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        $user=auth()->guard('e-users')->user();
        if (!$user) {
            return view('auth.userlogin', compact('sub_category', 'child_category',
            'category'

             ));
        }else{

        $user = auth()->guard('e-users')->user();
        $user_id=$user['id'];
        $wishlists=Wishlist::join('products', 'products.id','=','wishlists.products_id' )
        ->where('users_id', $user_id)
        ->get(['products.name','products.image','products.c_price','products.id']);






        return view('index.wishlist', compact('sub_category', 'child_category',
        'category', 'wishlists'

        ));
    }

}

    public function fetchWishlist(){




        $user = auth()->guard('e-users')->user();
        $user_id=$user['id'];


        $wishlists=Wishlist::join('products', 'products.id','=','wishlists.products_id' )
            ->where('users_id', $user_id)
            ->get(['products.name','products.image','products.c_price','products.id']);

      return $wishlists;


    }



    public function storeWishlist(Request $request,$dataId){



        $user = auth()->guard('e-users')->user();
        if (!$user) {
            return response()->json([
                "status" => 202,
                "message" => "please login",

            ]);
        }else{


            $products = Products::find($dataId);
            // dd($products);
            $product_id=$products['id'];
            // dd($product_id);

        $user_id=$user['id'];

        $status=Wishlist::where('users_id', $user_id)
        ->where('products_id',$product_id)
        ->first();

        // dd($status);
        if(isset($status)){





        return response()->json([
            "status" => 201,
            "message" => "Item Already saved",

        ]);

        }else{
            $wishlist = new Wishlist;
            $wishlist->users_id = $user_id;
            $wishlist->products_id = $product_id;
            $wishlist->save();
            // dd($wishlist);

            return response()->json([
                "status" => 200,
                "message" => "Item saved successfuly",

            ]);
           }
            }
    }

    public function countWishlist(){

        $user = auth()->guard('e-users')->user();
        $user_id=$user['id'];

        $wishlists=Wishlist::join('products', 'products.id','=','wishlists.products_id' )
        ->where('users_id', $user_id)
        ->get(['products.name','products.image','products.c_price','products.id']);
            // dd($wishlists);
            return response()->json($wishlists);
    }

    public function removeWishlist($id){
        $user = auth()->guard('e-users')->user();
        $user_id=$user['id'];
        $wishlist = Wishlist::where('products_id', $id)
            ->where('users_id', $user_id)
            ->first();
        //   dd($wishlist)
        if (isset($wishlist)) {
            $wishlist->delete();
            return redirect()->route('wishlist');
        }
    }

    public function deleteWishlist(){

        $user = auth()->guard('e-users')->user();
        $user_id=$user['id'];

        $wishlists=Wishlist::join('products', 'products.id','=','wishlists.products_id' )
        ->where('users_id', $user_id)
        ->get(['products.name','products.image','products.c_price','products.id']);
            // dd($wishlists);
           foreach($wishlists as $wishlist){
               $wishlist->delete();
           }
           return redirect()->route('wishlist');
    }

    public function profile()
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.profile', compact('sub_category', 'child_category',
        'category'

        ));
    }
    public function profile_update(Request $request)
    {
        $user = E_users::find($request->user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->tel_no= $request->phone;

        if($request->password){
            $user->password = Hash::make($request->password);
        }

        if($request->photo){
            $fileName = $user->first_name.$user->last_name.'_ppp'.'.'.$request->file->extension();

            $request->file->move(public_path('uploads'), $fileName);
            $user->image = $fileName;
        }
            $user->save();
            return Redirect::back();

    }
    public function orders()
    {
            $orders = Orders::all();
        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.orders', compact('sub_category', 'child_category','orders',
        'category'

        ));
    }
    public function tickets()
    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.ticket', compact('sub_category', 'child_category',
        'category'

        ));
    }
    public function store_user_reg(Request $request)
{

//    $details= request()->validate([
//     'first_name' => ['required', 'string', 'max:255'],
//     'middle_name' => ['required', 'string', 'max:255'],
//     'last_name' => ['required', 'string', 'max:255'],
//     'phone_no' => ['required', 'string', 'max:255'],
//         'email' => ['required', 'string', 'email','max:255', 'unique:users'],
//         'address' => ['required', 'string', 'max:255'],
//         'password' => ['required', 'string', 'min:8', 'confirmed']
//     ]);

    $tecshop_user =  E_users::create([
        'first_name'=>$request->first_name,
        'middle_name'=>$request->last_name,
        'last_name'=>$request->last_name,
        'tel_no'=>$request->phone_no,
        'email'=>$request->email,
        'password'=> Hash::make($request->password)
        ]);

        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",

        ]);

        }
    public function shop()

    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.shop', compact('sub_category', 'child_category',
       'category'

        ));
    }

    public function brands()

    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        return view('index.brands', compact('sub_category', 'child_category',
       'category'

        ));
    }



    public function campaign()

    {

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();
        $deals = Products::all();
        return view('index.campaign', compact('sub_category', 'child_category','deals',
       'category'

        ));

    }


    // compare functions



    public function compare()

    {


        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();

        $compare_product = session()->get('compare_product');

        if(!$compare_product) {

            $compare_product = [];
            session()->put('compare_product', $compare_product);
            $compare_count = count($compare_product);
            return view('index.compare', compact('category','sub_category', 'child_category','compare_product', 'compare_count'));


        }
        else{
            $compare_product_d = [];
foreach ( $compare_product as  $compare_pro){

    $product = Products::find($compare_pro);

   // if(!$compare_product_d) {

    // $compare_product_d = [
    //     $product->id => [$product ]
    // ];
    array_push($compare_product_d, $product);

//}

}
//return $compare_product_d;

            $compare_count = count($compare_product);
            return view('index.compare', compact('compare_product_d','category','sub_category', 'child_category','compare_product', 'compare_count'));

        }

  }




    public function compare_product($dataId)
    {

        $compare_product = session()->get('compare_product');

        if(!$compare_product) {

            $compare_product = [];

        }

        $compare_count = count($compare_product);

        if ($compare_count < 2){

        if(in_array($dataId, $compare_product)){

            session()->put('compare_product', $compare_product);
            $compare_count = count($compare_product);

            return response()->json([
                "status" => 202,
                "message" => "This product allready added to compare",
                "quantity" => $compare_count,
                "products" => $compare_product,
            ]);

        }else{

            array_push($compare_product, $dataId);
            session()->put('compare_product', $compare_product);
            $compare_count = count($compare_product);



        return response()->json([
            "status" => 200,
            "message" => "action completed successfully",
            "quantity" => $compare_count,
            "products" => $compare_product,
        ]);


    }
}
else{

    return response()->json([
        "status" => 202,
        "message" => "already added 2 compare product",
        "quantity" => $compare_count,
        "products" => $compare_product,
    ]);
}

    }


    public function compare_product_remove($dataId)
    {

        $compare_product = session()->get('compare_product');

        if(!$compare_product) {

            $compare_product = [];

        }


            $index = array_search($dataId, $compare_product);

if($index !== false){
   unset($compare_product[$index]);
}




        session()->put('compare_product', $compare_product);
        $compare_count = count($compare_product);

    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => $compare_count,
        "ff" => $compare_product,
    ]);


}
public function compare_product1()
    {
        $compare_product = session()->get('compare_product');

        if(!$compare_product) {

            $compare_product = [];

        }

        session()->put('compare_product', $compare_product);
        $compare_count = count($compare_product);

    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => $compare_count,
        "ff" => $compare_product,
    ]);


    }

    public function compare_product_kill()
    {
        session()->forget('compare_product');

    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => 0,

    ]);
    }


// cart functions
    public function product_cart()

    {
        $cart_product = session()->get('cart_product');

        if(!$cart_product) {

            $cart_product = [];

        }

        $category = Category::all();
        $sub_category = Sub_Category::all();
        $child_category = Child_Category::all();


        session()->put('cart_product', $cart_product);
        $cart_count = count($cart_product);
        return view('index.cart', compact('cart_product','cart_count','sub_category','child_category',
        'category'));
    }




    public function cart_product($dataId)
    {

          $product = Products::find($dataId);

       // $product = Product::find($dataId);
        $cart_product = session()->get('cart_product');

        if(!$cart_product) {

            $cart_product = [
                $dataId => [
                    "id"=>$product->id,
            "product" => $product->name,
            "quantity" => 1,
            "price" => $product->c_price,
            "image" => $product->image,
                ]
            ];
            // dd($cart_product);
            session()->put('cart_product', $cart_product);
            // dd(session()->get('cart_product'));

        }


        if(isset($cart_product[$dataId])) {

            // dd(session()->get('cart_product'));
            session()->put('cart_product', $cart_product);
            // dd(session()->get('cart_product'));
                // dd($cart_product[$dataId]['quantity']);


        }
    else{
        // if item not exist in cart then add to cart with quantity = 1
        $cart_product[$dataId] = [

            "id"=>$product->id,
            "product" => $product->name,
            "quantity" => 1,
            "price" => $product->c_price,
            "image" => $product->image,

        ];
    }
        session()->put('cart_product', $cart_product);
        $cart_count = count($cart_product);

    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => $cart_count,
        "ff" => $cart_product,
    ]);


    }


    public function cart_product_remove($dataId)
    {


        $cart_product = session()->get('cart_product');

        if(isset($cart_product[$dataId])) {

            unset($cart_product[$dataId]);

            session()->put('cart_product', $cart_product);

        }
        $cart_count = count($cart_product);
    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => $cart_count,
        "ff" => $cart_product,
    ]);


}
public function cart_product1()
    {
        $cart_product = session()->get('cart_product');

        if(!$cart_product) {

            $cart_product = [];

        }

        session()->put('cart_product', $cart_product);




        return response()->json($cart_product);


    }

    public function cart_product_kill()
    {
        session()->forget('cart_product');

    return response()->json([
        "status" => 200,
        "message" => "action completed successfully",
        "id" => 0,

    ]);
    }


    public function addByOne($dataId){

      //  $products =  Product::find($dataId);

        $cart_product = session()->get('cart_product');

        if(isset($cart_product[$dataId])) {

            $cart_product[$dataId]['quantity']++;

            session()->put('cart_product', $cart_product);

            $cart_product = session()->get('cart_product');

            $cart_count = count($cart_product);
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
                "id" => $cart_count,
                "ff" => $cart_product,
            ]);

        }
    }

    public function reduceByOne($dataId){

      //  $products = Product::find($dataId);

        $cart_product = session()->get('cart_product');

        if (isset($cart_product[$dataId])) {

            if ($cart_product[$dataId]['quantity'] > 1) {
                $cart_product[$dataId]['quantity']--;

                session()->put('cart_product', $cart_product);

                $cart_product = session()->get('cart_product');


            $cart_count = count($cart_product);
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
                "id" => $cart_count,
                "ff" => $cart_product,
            ]);
            }
        }
    }




    public function normal($dataId)

    {

       // $product = Products::where('childcategory_id', $dataId);
        $product = Products::all();
        return view('index.normal', compact('product'));
    }

    public function slider()

    {

        $product = Products::all();

        return view('index.popular', compact('product'));
    }



    public function mixed()

    {

        $product = Products::all();

        return view('index.mixed', compact('product'));
    }


    ///
    public function filter(Request $request)

    { 
        
        if($request->quick_filter){
                


    }


           if($request->category)
            {
                if($request->quick_filter){

                                
                    if($request->brand){
                
                        $products = Products::where('category_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->where('brand', $request->brand)
                        ->get();

                    }
                    else{
                        $products = Products::where('category_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->get();

                    }

                }
                else{
  if($request->brand){
                
    $products = Products::where('category_id', $request->category)  
    ->where('brand', $request->brand)
    ->get();

                    }
                    else{
                        $products = Products::where('category_id', $request->category)
                           ->get();
                        
                    }
                }

            }
            
            elseif($request->subcategory)
            {
                if($request->quick_filter){

                                
                    if($request->brand){
                
                        $products = Products::where('subcategory_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->where('brand', $request->brand)
                        ->get();

                    }
                    else{
                        $products = Products::where('subcategory_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->get();

                    }

                }
                else{
  if($request->brand){
                
    $products = Products::where('subcategory_id', $request->category)  
    ->where('brand', $request->brand)
    ->get();

                    }
                    else{
                        $products = Products::where('subcategory_id', $request->category)
                         ->get();
                        
                    }
                }
           
            }

            elseif($request->childcategory)
            {
                if($request->quick_filter){

                                
                    if($request->brand){
                
                        $products = Products::where('childcategory_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->where('brand', $request->brand)
                        ->get();

                    }
                    else{
                        $products = Products::where('childcategory_id', $request->category)
                        ->where('type', $request->quick_filter)
                        ->get();

                    }

                }
                else{
  if($request->brand){
                
    $products = Products::where('childcategory_id', $request->category)  
    ->where('brand', $request->brand)
    ->get();

                    }
                    else{
                        $products = Products::where('childcategory_id', $request->category)
                        ->get();
                        
                    }
                }
           
            }

            else    
               {
           
            }

            if($request->sorting == "low_to_high"){


                $products = $products->orderBy('c_price', 'asc');
             
            }
            elseif($request->sorting == "high_to_low")
            {
               
                $products = $products->orderBy('c_price', 'DESC');
    
     }
            



        if($request->view_check == "list"){

             return view('index.filter_listview', compact('products' ));
        }
        else{



            return view('index.filter_blockview', compact('products' ));

       
        }

    }


    public function stkpush(Request $request){


        $order_number = session()->get('order_number');

        $order = Orders::where('order_number', $order_number)->first();
        

        $Mpesacontroller = new MpesaController;


    //  $stkpush =  $Mpesacontroller->lipaNaMpesa($order->total,$request->txn_id,$order_number);


              return response()->json([
                  "status" => 200,
                  "message" => "action completed successfully",
                 // "stkpush" => $stkpush,
              
              ]);
              }
        
              
              public function confirmpayment()

              {

                $order_number = session()->get('order_number');

                $order = Orders::where('order_number', $order_number)->first();
                
          if($order->status == "completed"){
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
                "order_number" => $order->order_number,
              
            
            ]);

          }else{


                return response()->json([
                    "status" => 200,
                    "message" => "action completed successfully",
                  
                
                ]);

            }
              }
          
              public function invoice($dataId)
              {
          

                $order = Orders::where('order_number', $dataId)->first();
                  $category = Category::all();
                  $sub_category = Sub_Category::all();
                  $child_category = Child_Category::all();
          
                  return view('index.invoice', compact('sub_category', 'child_category','order',
                 'category'
          
                  ));
              }
              public function print_order($dataId)
              {
          

                $order = Orders::where('order_number', $dataId)->first();
             
          
                  return view('index.print', compact('order'    
                  ));
              }


              public function search(Request $request){


                if($request->search)
                {
                    if($request->category){
                        $products = Products::where('name', 'LIKE', "%{$request->search}%" )
                        ->orWhere('category_id',  $request->category)->get();
    
                    }
                    else 
                    {
                        $products = Products::where('name', 'LIKE', "%{$request->search}%" )->get();
                    }
                }
                else
                 {
                    $products = Products::where('status', 'enabled')->limit(15)->get();  

                }

             
                $category = Category::all();
                $sub_category = Sub_Category::all();
                $child_category = Child_Category::all();
   
                return view('index.search', compact('sub_category', 'child_category','products',
                'category'
         
                 ));
                
              }

        
}
