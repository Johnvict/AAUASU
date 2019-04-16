<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voters;
use App\nick;
use App\User;
use App\FoaAdmin;
use App\Contestant;
use App\Category;
use App\Vote;
use App\VoteCasts;
use App\VotedVoter;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
//use Illuminate\Facades\Session;
use Illuminate\Support\Facades\Auth;

class foaController extends Controller
{
   public function getvoting()
    {
        return view('foapages/voting');
    }

    public function getVoteJumper()
    {
        $jumper = "Please Enter Your Details Before You Attempt Voting";
        return redirect('foa/voting')->with('jumper', $jumper);
    }

    public function getaccredited(Request $request)
    {
        $this->validate($request, [
            'MatricNumber' => 'required|min:9|max:9|unique:voters',
            'Faculty' => 'required',
            'PhoneNumber' => 'required|min:11|max:11|unique:voters',
            'Nick' => 'required',
        ]);


        $MatricNumber = $request->input('MatricNumber');
        $Faculty = $request->input('Faculty');
        $PhoneNumber = $request->input('PhoneNumber');
        $Nick = $request->input('Nick');

        $post = new voters();
        $post -> MatricNumber = $MatricNumber;
        $post -> Faculty = $Faculty;
        $post -> PhoneNumber = $PhoneNumber;
        $post -> save();
        
        $postvoter = new User();
        $postvoter -> UserId = $MatricNumber.$MatricNumber;
        $postvoter -> Password = $PhoneNumber;
        $postvoter -> userProfile_MatricNumber = "_";;
        $postvoter -> save();
        
        $post2 = new nick();
        $post2 -> Nick = $Nick;
        $post2 -> save();

        return view('foapages/proceed');
    }

    public function getProceedJumper()
    {
        $jumper = "Please Enter Your Details Before You Attempt Voting";
        return redirect('foa/voting')->with('jumper', $jumper);            
    }

    public function getProceed()
    {
        return view('foapages/proceed');
    }

    public function getvotenow()
    {
        $categories = Category::orderBy('id', 'asc')->get();;
        $contestants = Contestant::all();
        return view('foapages/vote', compact('categories'))->with(['contestants' => $contestants]);
    }

    public function votenow(Request $request)
    {
        $MatricNumber = $request->input('MatricNumber');
        $getvoter = User::where([
            ['UserId', $MatricNumber.$MatricNumber],
        ])->first();

        $checkVoteRecord  = VotedVoter::where([
            ['Voted', "Voted_".$MatricNumber.$MatricNumber],
        ])->first();

        $already = "You have voted already! Double Vote Not Allowed";
        $nonexist = "Please Check the Matric Number for correctness";
        if($getvoter){

            if($checkVoteRecord){
                return redirect('foa')->with(['already' => $already]);
            }
            else
            {
                Auth::login($getvoter);
                $categories = Category::orderBy('id', 'asc')->get();;
                $contestants = Contestant::all();
                return view('foapages/vote', compact('categories'))->with(['contestants' => $contestants, 'getvoter' => $getvoter]);
            }

        }
        
        else{
            return view('foapages/proceed')->with('nonexist', $nonexist);
        }
    }

    public function getCategory()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('foapages/awardcategories')->with('categories', $categories);
    }

    public function getVotes()
    {
        $voters = voters::all();
        $votes = Vote::all();
        $categories = Category::orderBy('id', 'desc')->get();;
        $contestants = Contestant::all();
        return view('foapages/votes')->with(['voters'=> $voters, 'votes' => $votes, 'categories' => $categories, 'contestants' => $contestants]);
    }

    
    public function getFoaAdmin()
    {
        return view('foapages/foaAdmin');
    }


    public function addContestant(Request $request)
    {
        $this->validate($request, [
            'category_catid' => 'required',
            'contnick' => 'required|unique:contestants',
            'contid' => 'required',
        ]);


        $Category = $request->input('category_catid');
        $Nick = $request->input('contnick');
        $ContestantId = $request->input('contid');

        $post = new Contestant();
        $post -> contnick = $Nick;
        $post -> category_id = $Category;
        $post -> contid = $Category.$ContestantId;
        //$post -> id = $ContestantId;
        $post -> save();


        $status = "Contestant Added Successfuly";

        $contestantt = Contestant::all();
        $Categories = Category::orderBy('created_at', 'desc')->get();
        return view('foapages/contestants')->with(['contestantt' => $contestantt,
            'Categories' => $Categories, 'status' => $status]);
    }

    public function getCategoryPage()
    {
        $status = "Category Added Successfuly";
        $Categories = Category::orderBy('id', 'desc')->get();;
        return view('foapages/category')->with(['Categories' => $Categories, 'status' => $status]);
    }

    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|unique:categories',
            'catname' => 'required|unique:categories',
        ]);


        $CategoryID = $request->input('id');
        $CategoryName = $request->input('catname');

        $cate = new Category();
        $cate -> id = $CategoryID;
        $cate -> catname = $CategoryName;
        $cate -> save();


        $status = "Category Added Successfuly";

        $Categories = Category::orderBy('id', 'asc')->get();;
        $contestantt = Contestant::all();
        return redirect('foa/admin/category')->with(['Categories' => $Categories, 'status' => $status]);
    }


    public function deleteContestant($id){
        $post = Contestant::find($id);
        $post -> delete();

        $status = "Contestant Successfully Deleted";
        return redirect('foa/admin/contestants')->with('status',$status);
    }

    public function deleteCategory($id){
        $post = Category::find($id);
        $post -> delete();

        $status = "Category Removed Successfully";
        return redirect('admin/category')->with('status',$status);
    }

    public function getContestants()
    {
        $contestantt = Contestant::orderby('category_id', 'asc')->get();
        $Categories = Category::all();
        return view('foapages/contestants')->with(['contestantt' => $contestantt, 'Categories' => $Categories]);
    }


    public function signinFoaAdmin(Request $request){
        
        $Username = $request->input('Username');
        $Password = $request->input('Password');

        $getUser = User::where([
            ['UserId', $Username],
            ['Password', $Password]
        ])->first();

        $getAdmin = FoaAdmin::where([
            ['Username', $Username],
            ['Password', $Password]
        ])->first();

        if($getUser)
        {
            if($getUser AND $getAdmin)
            {
                Auth::login($getUser);
                return redirect('/foa/admin/dashboard');
            }
            else
            {
                $trial = "Invalid User Details";
                return redirect('/foa/admin')->with('trial', $trial);
            }
        }
        else {
            $trial = "Invalid User Details";
            return redirect('/foa/admin')->with('trial', $trial);
        }
    }

    public function getFoaAdminDashboard()
    {
        return view('foapages/foaAdminDashboard');
    }

    public function logoutFoaAdmin(){
        Auth::logout();
        return redirect()->route('foaAdmin');
    }


    public function castVote(Request $request)
    {
        $this->validate($request, [
            'voterId' => 'required|unique:votes',
        ]);

        $VoteId = $request->input('voteid');
        $CategoryId = $request->input('category_id');
        $VoterId = $request->input('voterId');
        $Voter = Auth::user()->UserId;

        $saveVote = new Vote();
        $saveVote -> category_id = $CategoryId;
        $saveVote -> voteid = $VoteId;
        $saveVote -> voterid = $VoterId;
        $saveVote -> save();

        $regVoter = new VotedVoter();
        $regVoter -> Voted = "Voted_".$Voter;
        $regVoter -> save();

        return redirect('foa/vote');
    }

    public function logoutVoter()
    {
        $VoteStatus = "Thanks for Voting! Please Tell Your Friends About FOA";

        Auth::logout();
        //return $VoteStatus;
        return redirect('/foa/')->with(['VoteStatus' => $VoteStatus]);
    }

    public function goFoaAdmin(Request $request)
    {

        $Username = $request->input('MatricNumber');
        $Faculty = $request->input('Faculty');
        $getvoter = voters::where([
            ['MatricNumber',$MatricNumber],
            ['PhoneNumber', $PhoneNumber]
        ])->first();
        if($getvoter)
        {
            Auth::login($getvoter);
            return view('foapages/vote')->with('getvoter', $getvoter);
        }
        else
        {
            $jumper = "Please Enter Yor Details Before You Attempt Voting";
            return redirect('foapages/voting')->with('jumper', $jumper);
        }
    }

    public function getContactFOA()
    {
        return view('foapages/contactFoa');
    }


    //***saved for further editing in future usage***
    /*
    public function readPost($id)
    {
        $post = Post::find($id);

        return view('posts.read')->withPost($post);
    }

    public function editPost($id)
    {
        $post = Post::find($id);

        return view('posts.edit')->withPost($post);
    }

    public function updatePost(Request $request, $id)
    {
        $name = $request->input('name');
        $matricnum = $request->input('matnum');
        $dept = $request->input('dept');

        $post = Post::find($id);
        $post -> name = $name;
        $post -> matnum = $matricnum;
        $post -> dept = $dept;
        $post -> save();

        $status = "Student Data Successfully Updated";

        return redirect('/')->with('status',$status);
    }
    
      */


    //OUR CLASS WITH MR. ROTIMI
    public function getTraining()
    {
        return view ('training');
    }
}
