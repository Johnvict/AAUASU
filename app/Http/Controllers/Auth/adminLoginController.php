<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Admin;
use App\User;

class adminLoginController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest:web');
//    }

    public function getAdminLoginPage()
    {
        if(Auth::user())//->is_admin == "0")
        {
            return redirect()->back();
        }
        return view('admin.login');
    }

    public function loginAdmin(Request $request){
        $Username = $request->input('username');
        $Password = $request->input('password');
        $Email = $request->input('email');

        $getUser = User::where([
            ['Username', $Username],
            ['Password', $Password],
            ['Email', $Email]
        ])->first();

        $getAdmin = Admin::where([
            ['Username', $Username],
            ['Password', $Password],
            ['Email', $Email]
        ])->first();

        $trial = "Invalid Login Details";

        if($getUser)
        {
            //IF ADMIN LOGS IN, OUR SITE GOES TO ADMIN DASHBOARD
            if($getUser AND $getAdmin)
            {
                Auth::login($getUser);
                return redirect()->route('get-admin-dashboard');
            }
            //IF A USER TRY LOGGING IN, OUR SITE GOES TO USER HOME
            elseif($getUser AND! $getAdmin)
            {
                Auth::login($getUser);
                return redirect()->route('loginAauaite');
            }
            else
            {
                return redirect()->back()->withInput($request->only('email', 'username', 'remember'));
            }
        }
        else {

            return redirect()->back()->withInput($request->only('email', 'username', 'remember'));
        }
    }

    public function getAdminDashboard()
    {
        if(Auth::user()->is_admin == "1")
        {
            return view('admin.dashboard');
        }
        return redirect()->back();
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect()->route('adminLoginPage');
    }



//    public function __construct()
//    {
//        $this->middleware('guest:admin');
//    }
//
//    public function loginAdmin(Request $request)
//    {
//        //TO VALIDATE THE INPUT DETAILS
//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required|min:6',
//        ]);
//
//
//        //TO ATTEMPT LOGIN
//        /*if(Auth::guard('admin')->attempt(array('username' => $username, 'password' => $password)))*/
//        if (Auth::guard('admin')->attempt(['email' => $request->email,
//            'password' => $request->password, 'username' => $request->username], $request->remember))
//        {
//            //IF SUCCESSFUL THEN REDIRECT TO DESIRED LOCATION
//            return redirect()->route('get-admin-dashboard');
//            //return redirect()->intended(route('get-admin-dashboard'));
//        } else{
//            //IF UNSUCCESSFUL THEN REDIRECT BACK
//            return redirect()->back()->withInput($request->only('email', 'username', 'remember'));
//        }
//    }
//
//    public function getAdminDashboard()
//    {
//        return view('admin.dashboard');
//    }
//
//    public function logoutAdmin(Request $request)
//    {
//        Auth::guard('admin')->logout();
//        /*$request->session()->flush();         //THIS LOGS OUT ALL USER IN THE BROWSER
//        $request->session()->regenerate();*/    //THIS LOGS OUT ALL USER IN THE BROWSER
//        return redirect()->route('adminLoginPage');
//    }
}
