<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Admin;
use URL;
use DB; 
use Carbon\Carbon; 
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\E_users;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   


    

    public function adminSignIn()
    {

        return view('auth.adminlogin');
    }
    public function usersignIn(Request $request)
    {
        // dd(url()->current());
        // dd($request);
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
           ]);

        $details = [ 'email' => $request->email , 'password' => $request->password ];
           if (Auth::guard('e-users')->attempt($details)) {

      
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
    
            ]);
        }
           else{
                // return redirect()->back()->withInput()->withErrors(['password' => 'password does not exist',
                //                                                 'email' => 'email does not exist']);


                return response()->json([
                    "status" => 202,
                    "message" => "action completed successfully",
        
                ]);


           }
    }

    public function adminsignInpost(Request $request)
    {
        // dd(url()->current());
        // dd($request);
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|min:3'
           ]);

        $details = [ 'email' => $request->email , 'password' => $request->password];
           if (Auth::guard('admin')->attempt($details)) {

      
            return response()->json([
                "status" => 200,
                "message" => "action completed successfully",
    
            ]);
        }
           else{
                // return redirect()->back()->withInput()->withErrors(['password' => 'password does not exist',
                //                                                 'email' => 'email does not exist']);


                return response()->json([
                    "status" => 202,
                    "message" => "action completed successfully",
        
                ]);


           }
    }
    public function usersignOut(Request $request) {
        Auth::guard('e-users')->logout();


        return redirect('/user/login');
    }
    public function adminsignOut(Request $request) {
        Auth::guard('admin')->logout();


        return redirect('/admin/login');
    }

    public function admin_forgot_password()
    {

  return view('auth.admin_forgot_password');
    }

    public function admin_rest_password(Request $request)
{


    $admin = Admin::where('email', $request->email)->first();

    if(!$admin){

 return response()->json([
    "status" => 202,
    "message" => "email does not exist",

]);
    }
    else{


        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
          ]);
          $tokenData = DB::table('password_resets')
          ->where('email', $request->email)->first();
        $link =config('app.Site_URL');
        $data = [
            'email' => $request->email,
            'name' => $admin->name,
            'link' => $link,
            'token' => $tokenData->token,
        ];

//   return view('emails.reserPassword', compact(['data' ]));
 //   Mail::to($request->email)->send(new ResetPasswordRequest($data));
   return response()->json([
    "status" => 202,
    "message" => "check your email".$token,

]);

    }


}

public function admin_resetPassword($token, $email)
{


       $updatePassword = DB::table('password_resets')
    ->where([
      'email' => $email,
      'token' => $token,
    ])->first();

        if(!$updatePassword){

        return view('auth.error')->with('error', 'Invalid token!');

        }

      

    return view('auth.admin_reset_password', compact(['email', 'token' ]));


}

public function reset_Password(Request $request)
{

    $request->validate([
              'password' => 'min:6|alphaNum|required_with:password_confirm|same:password_confirm',
        'password_confirm' => 'required'
    ]);


    $updatePassword = DB::table('password_resets')
    ->where([
      'email' => $request->email,
      'token' => $request->pass_token,
    ])->first();

        if(!$updatePassword){
            return response()->json([
            "status" => 200,
            "message" => "Invalid token!",
        
        ]);

        }
       

$user = Admin::where('email', $request->email)
->update(['password' => Hash::make($request->password)]);

DB::table('password_resets')->where(['email'=> $request->email])->delete();


return response()->json([
    "status" => 200,
    "message" => "Your password has been changed!",

]);
}
public function logout(Request $request) {
    Auth::logout();
    return redirect('/admin');
}
}
