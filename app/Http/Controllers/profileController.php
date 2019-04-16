<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
/*use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;*/
use App\Profile;
use App\Faculty;
use App\Aauaites;
use App\User;

class profileController extends Controller
{
    public function getProfile($Username)
    {
        $user = User::whereUsername($Username)->first();
        if(!$user){
            $userNotFound = "Error";
            return view('errorPage')->with('userNotFound', $userNotFound);
        }	
        return view('aauaites/profile')->with('user', $user);
        //to get the user type
        // dd($user);
    }

    public function getEditProfile()
    {

        $faculty = Faculty::all("Faculty","id");
        $faculty = DB::table("faculties")->pluck("Faculty","id");
        return view('aauaites/editProfile',compact('faculty','user','mydetails'));
        //return view('aauaites/editProfile')->withProfile(['user', $user, 'mydetails', $mydetails]);
    }

    public function updateProfile(Request $request, $id){

        $Name = $request->input('Name');
        $Username = $request->input('Username');
        $Department = $request->input('Department');
        $Faculty = $request->input('Faculty');
        $PhoneNumber = $request->input('PhoneNumber');
        $Level = $request->input('Level');
        $About = $request->input('About');
        $PostHeld = $request->input('PostHeld');

        $profile = User::find($id);
        $profile -> Name = $Name;
        $profile -> Username = $Username;
        $profile -> Department = $Department;
        $profile -> PhoneNumber = $PhoneNumber;
        $profile -> Level = $Level;
        $profile -> About = $About;
        $profile -> PostHeld = $PostHeld;


        if($request->input('Faculty'))
        {
            $profile -> Faculty = $Faculty;
        }
        if($request->input('Faculty'))
        {
            $profile -> Faculty = $Faculty;
        }

        if(Input::hasFile('Avatar'))
        {
            //MAKING SURE THAT THE USER UPLOADS REQUIRED IMAGE FORMAT
            $extension = $request->Avatar->getClientOriginalextension();
            if($extension != "jpg")
            {
                $error = "Sorry! You can't use this file format for your Avatar";
                return redirect('/editprofile/'.Auth::user()->MatricNumber)->with('error', $error);
            }

            //SAVING THE IMAGE AS USER Username.ImageName
            $Avatar = Auth::user()->Username.$request->Avatar->getClientOriginalName();
            //SAVE TO DISK
            $request->Avatar->storeAs('public/avatar',$Avatar);
            $url = Storage::url('avatar/'.$Avatar);

            $profile -> Avatar = $url;
        }
        //CHECK IF USERNAME ALREADY EXISTS
        $UsernameChecker = User::whereUsername($Username)->first();
        if($UsernameChecker)
        {
            if($UsernameChecker->Username != Auth::User()->Username)
            {
                $error = "Username already taken";
                return redirect('/editprofile/'.Auth::user()->MatricNumber)->with('error', $error);
                //return view('aauaites/editProfile',compact('faculty','user','mydetails'));
                //return redirect()->back()->withInput($request->only('email', 'username', 'remember'));

            }
        }
        //CHECK IF PHONE NUMBER ALREADY EXISTS
        $PhoneNumberChecker = User::wherePhonenumber($PhoneNumber)->first();
        if($PhoneNumberChecker)
        {
            if($PhoneNumberChecker->PhoneNumber != Auth::User()->PhoneNumber)
            {
                $error = "Phone Number already taken";
                return redirect('/editprofile/'.Auth::user()->MatricNumber)->with('error', $error);

            }
        }

        //SAVE THE NEW DATA SUPPLIED TO DATABASE
        $profile -> save();


        $status = "Profile Successfully Updated";
        $user = User::whereUsername($Username)->first();
        return redirect('profile/'.$user->Username)->with(['status' => $status, 'user' => $user]);
    }
}
