<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\nick;
use App\Comment;
use App\Like;
use App\PostUpdate;
use App\Material;
use Illuminate\Support\Facades\DB;

class aauaitesController extends Controller
{
    public function getLogin()
    {

        $user = Auth::user();
        $allStatuss = PostUpdate::orderBy('created_at', 'desc')->get();

        return view('aauaites/home')->with(['allStatuss' => $allStatuss, 'user' => $user, 'materials' => [] ]);
    }


    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'MatricNumber' => 'required|unique:profiles',
            'Name' => 'required',
            'Email' => 'required|unique:profiles',
            'Gender' => 'required',
            'Password' => 'required|min:6'
        ]);


        $MatricNumber = $request->input('MatricNumber');
        $Name = $request->input('Name');
        $Email = $request->input('Email');
        $Gender = $request->input('Gender');
        $Password = $request->input('Password');
        $Username = strtok($Email, '@');

        $user = new User();
        $user -> Password = $Password;
        $user -> Name = $Name;
        $user -> MatricNumber = $MatricNumber;
        $user -> Username = $Username;
        $user -> Email = $Email;
        //$user -> Password = bcrypt($Password);
        $user -> Password = ($Password);
        $user -> Gender = $Gender;
        $user -> Faculty = $Username.' has not set this';
        $user -> Department = $Username.' has not set this';
        $user -> PhoneNumber = $Username.' has not set this';
        $user -> Level = $Username.' has not set this';
        $user -> Avatar = '/storage/avatar/AvatarDefault'.$Gender.'.jpg';
        $user -> About = "I'm an AAUAite";
        $user -> PostHeld = "No Post Record Yet";

        $user -> save();
        Auth::login($user);






        $status = "Registration Successful! Login Below";

        return redirect()->route('loginAauaite');
        
        //$user = aauaites::all();
        //return view('/'); //->with(['contestantt' => $contestantt, 'status' => $status]);
    }

    public function postLogin(Request $request)
    {
     /*   if(Auth::attempt(['Username' => $request['LogMatricNumber'], 'Password' => $request['LogPassword']]))
        {
            return redirect()->route('loginAauaite');
        }
        return redirect()->back();
        
       */ 
    
        $MatricNumber = $request->input('LogMatricNumber');
        $Password = $request->input('LogPassword');

        $getAauaite = User::where([
            ['MatricNumber', $MatricNumber],
            ['Password', $Password]
        ])->first();
        if($getAauaite)
        {
            // return "Login Successful";
            //return $UserId."<br>".$Password."<br>"."Login successful";
            //$Userdetails = Aauaites::all();
            //$allStatus = PostUpdate::orderBy('created_at', 'desc')->get();
            
            auth::login($getAauaite);
            return redirect()->route('loginAauaite');
            //return view('/aauaites/home');//->with('allStatus', $allStatus);
        }
        else
        {
            $trial = "Invalid User Details";
            //return "Invalid login details";
          return redirect('/')->with('trial', $trial);
        }

        

    }

    public function getProfile($UserId)
    {
        $user = Auth::user();
        return view('aauaites/profile', compact('user'));//->with('user', $user);
    }

    public function storePost(Request $request)
    {
        $content = $request -> input('content');

        $storePosts = new PostUpdate();
        $storePosts -> content = $content;
        $storePosts -> user_id = Auth::user()->id;
        $storePosts -> save();

        $allStatuss = PostUpdate::orderBy('created_at', 'desc')->get();
        //$allStatuss = PostUpdate::all();
        $message = "Post Updated successfully";
       return redirect('aauaites/home')->with(['message' => $message, 'allStatuss' => $allStatuss]); //redirect();//->route('aauaites/home'); //
    }

    public function postLikePost(Request $request)
    {
        $post_id = $request['statusId'];
        $is_like = $request['islike'] == 'true';

        $update = false;
        $post = PostUpdate::find($post_id);
        if(!$post){
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('postUpdate_id', $post_id)->first();
        if($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_like){
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->postUpdate_id = $post_id;
        if($update){
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }

    public function getReadPost($id){
        $post = PostUpdate::find($id);
        $comments = Comment::orderBy('created_at', 'asc')->get();
        //return "Yes ".$comments;
        return view('aauaites/readpost')->withPost($post)->with('comments', $comments);
    }

    public function commentPost(Request $request)
    {
        $content = $request -> input('content');
        $postID = $request -> input('post_id');

        $storePosts = new Comment();
        $storePosts -> body = $content;
        $storePosts -> user_id = Auth::user()->id;
        $storePosts -> postUpdate_id = $postID;
        $storePosts -> save();

        $post = PostUpdate::find($postID);
        $comments = Comment::orderBy('created_at', 'asc')->get();

        return redirect('posts/'.$postID)->withPost($post)->with('comments', $comments);
    }

    public function getDeletePost($id){
        $post = PostUpdate::find($id);

        //DELETE ALL THE POST'S COMMENTS NOW
        $comments = Comment::wherePostupdateId($id)->get();
        foreach ($comments as $comment) {
            $comment -> delete();
        }

        //DELETE THE POST NOW
        $post -> delete();

        return redirect('/aauaites/home')->withPost($post);
    }

    public function getEditPost($id){
        $post = PostUpdate::find($id);

        return view('aauaites/editPost')->withPost($post);
    }

    public function updatePost(Request $request, $id){
        $content = $request->input('content');

        $post = PostUpdate::find($id);
        $post -> content = $content;
        $post -> save();

        $status = "Status Successfully Updated";

        //return $status;
        return redirect('aauaites/home')->with('status',$status);
    }

    public function getEditComment($id){
        $comment = Comment::find($id);

        return view('aauaites/editComment')->withComment($comment);
    }

    public function updateComment(Request $request, $id){
        $body = $request->input('body');

        $comment = Comment::find($id);
        $comment -> body = $body;
        $comment -> save();
        $postID = $comment->postUpdate_id;

        return redirect('/posts/'.$postID);
    }
    public function getDeleteComment($id){
        $comment = Comment::find($id);
        $comment -> delete();

        return redirect()->back();
    }

    public function getLogoutUser(){
//        $nickNav = nick::all();
        Auth::logout();
        return redirect()->route('welcomePage');//->with('nickNav', $nickNav);
    }

    /*
    public function savepost(Request $request)
    {
        
        $arti = $request->all();
        $user = Auth::user();
        $savepost = $user->belongs()->create($arti);
     
        return redirect('aauaites/profile');
    }

    */
                    /*
                        

                        /**
                         * Create a new controller instance.
                         *
                         * @return void
                         */

                    /*
                        public function __construct()
                        {
                            $this->middleware('auth');
                        }
                    */
                        /**
                         * Show the application dashboard.
                         *
                         * @return \Illuminate\Http\Response
                         */
                    /*
                        public function index()
                        {
                            return view('aauaites/home');
                        }
                    */

}
