<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use App\Iroyin;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{


   /* public function __construct()
    {
        $this->middleware('web');
    }*/


    public function materialCheck()
    {
        $materials = Material::where([
        ['approval', '0']
        ])->orderBy('created_at', 'desc')->get();

        if(Auth::user()->is_admin == "1")
        {
            return view('admin.materials')->with(['materials' => $materials]);
        }
        return redirect()->back();


    }
    public function approveMaterial(Request $request){
        $id = $request->input('approve');
        $material = Material::find($id);
        $material->approval = "1";
        $material->save();
        return redirect()->route('materialCheck')->with('success', "Material Approved Successfully");
    }

    public function disapproveMaterial(Request $request){
        $id = $request->input('disapprove');
        $fileName = $request->input('filename');
        $material = Material::find($id);
        //DELETE FILE DETAILS FROM DATABASE
        $material->delete();

        //DELETE FILE FROM SERVER STORAGE
        Storage::delete('public/materials/'.$fileName);
        return redirect()->route('materialCheck')->with('success', "Material Dissaproved and Deleted Successfully");
    }

    public function getAddNews(){
        if(Auth::user()->is_admin == "1")
        {
            return view('admin.news');
        }
        return redirect()->back();
    }

    public function createNews(Request $request){

        $news = new Iroyin();
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->show_status = $request->input('show');
        $news->save();

        return redirect()->route('addNews')->with('success', "News Posted Successfully");
    }
    public function editNews(Request $request){
        $id = $request->input('newsId');

        $news = Iroyin::find($id);
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->show_status = $request->input('show');

        $news->save();

        return redirect()->route('addNews')->with('success', 'News edited successfully');
    }

    public function deleteNews($id){
        $news = Iroyin::find($id);
        $news -> delete();

        return redirect()->route('addNews')->with('success', 'News Deleted successfully');
    }

}
