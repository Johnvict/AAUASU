<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class APIController extends Controller
{
    public function index()
    {
        $countries = DB::table("countries")->pluck("name","id");
        return view('select',compact('countries'));
        //return view('select')->with('countries', $countries);
    }
    public function getStateList(Request $request)
    {
        $states = DB::table("states")
            ->where("country_id",$request->country_id)
            ->lists("name","id");
        return response()->json($states);
    }
    /*public function getCityList(Request $request)
    {
        $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->lists("name","id");
        return response()->json($cities);
    }*/
}