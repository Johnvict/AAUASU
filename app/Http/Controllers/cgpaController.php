<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Course;
use App\Result;
use App\Gpa;
use Illuminate\Support\Facades\Auth;

class cgpaController extends Controller
{

    public function getGradePoint()
    {
        $myGpa = Gpa::whereUserId(Auth::user()->id)->first();
        return view('gpa/cgpa')->with('myGpa', $myGpa);
    }

    public function postPopulateGpa()
    {
        $id = Auth::user()->id;
        $check = Gpa::whereUserId($id)->get();



        if(count($check) > 0)
        {

        } else{

            $gpafake = new Gpa();

            $gpafake -> user_id = $id;
            $gpafake -> gpa1001 = 0;
            $gpafake -> gpa1002 = 0;
            $gpafake -> gpa2001 = 0;
            $gpafake -> gpa2002 = 0;
            $gpafake -> gpa3001 = 0;
            $gpafake -> gpa3002 = 0;
            $gpafake -> gpa4001 = 0;
            $gpafake -> gpa4002 = 0;
            $gpafake -> gpa5001 = 0;
            $gpafake -> gpa5002 = 0;
            $gpafake -> cgpa100 = 0;
            $gpafake -> cgpa200 = 0;
            $gpafake -> cgpa300 = 0;
            $gpafake -> cgpa400 = 0;
            $gpafake -> cgpa500 = 0;
            $gpafake -> finalCGPA = 0;


            $gpafake ->save();
        }
                $thisId = Gpa::whereUserId($id)->first()->id;

                $results = array();
                $result = array();
                $firstTCP = 0; $secondTCP = 0;
                $firstTCU = 0; $secondTCU = 0;
                $ttcp = 0; $ttcu = 0; $finalTCP = 0; $finalTCU = 0;

        for($i=1;$i<=5;$i++)
        {
            for($j=1;$j<=2;$j++)
            {
                $tcp = 0; $tcu = 0;
                $results[$i.$j] = Result::where([
                    ['user_id', $id],
                    ['semester', $j],
                    ['level', $i*100],
                    ['resultStatus', 1],
                ])->get();

                foreach($results[$i.$j] as $result[$i.$j])
                {
                    $tcp = $tcp + $result[$i.$j]->cp;
                    $tcu = $tcu + $result[$i.$j]->Course->unit;
                    $finalTCP = $finalTCP + $result[$i.$j]->cp;
                    $finalTCU = $finalTCU + $result[$i.$j]->Course->unit;
                }

                if($j == 1)
                {
                    $firstTCP = $tcp;
                    $firstTCU = $tcu;

                } elseif($j == 2){
                    $secondTCP = $tcp;
                    $secondTCU = $tcu;
                }

                $ttcp = ($firstTCP + $secondTCP);
                $ttcu = ($firstTCU + $secondTCU);


                if($tcu == 0)
                {
                    $gpa = 0.01;
                } else {
                    $gpa = ($tcp/$tcu);
                }

                $gp =  Gpa::find($thisId);
                if(($i == 1)and($j==1)){
                    $gp -> gpa1001 = $gpa;
                }
                elseif(($i == 1)and($j==2)) {
                    $gp -> gpa1002 = $gpa;
                }
                elseif(($i == 2)and($j==1)){
                    $gp -> gpa2001 = $gpa;
                }
                elseif(($i == 2)and($j==2)) {
                    $gp -> gpa2002 = $gpa;
                }
                elseif(($i == 3)and($j==1)){
                    $gp -> gpa3001 = $gpa;
                }
                elseif(($i == 3)and($j==2)) {
                    $gp -> gpa3002 = $gpa;
                }
                elseif(($i == 4)and($j==1)){
                    $gp -> gpa4001 = $gpa;
                }
                elseif(($i == 4)and($j==2)) {
                    $gp -> gpa4002 = $gpa;
                }
                elseif(($i == 5)and($j==1)){
                    $gp -> gpa5001 = $gpa;
                }
                elseif(($i == 5)and($j==2)) {
                    $gp -> gpa5002 = $gpa;
                }
                $gp -> save();
            }

            if($ttcu == 0)
            {
                $cgpa = 0.01;
            } else {
                $cgpa = $ttcp/$ttcu;
            }

            $gp =  Gpa::find($thisId);
            if($i==1){
                $gp -> cgpa100 = $cgpa;
            }
            elseif($i==2){
                $gp -> cgpa200 = $cgpa;
            }
            elseif($i==3){
                $gp -> cgpa300 = $cgpa;
            }
            elseif($i==4){
                $gp -> cgpa400 = $cgpa;
            }
            elseif($i==5){
                $gp -> cgpa500 = $cgpa;
            }


            $gp -> save();
        }

        if($finalTCU == 0){
            $finalCGPA = 0.01;
        } else{
            $finalCGPA = $finalTCP/$finalTCU;
        }
        $gpfinal =  Gpa::find($thisId);
        $gpfinal ->finalCGPA = $finalCGPA;
        $gpfinal ->save();

        //return Gpa::whereId($thisId)->get();
        $myGpa = Gpa::whereUserId(Auth::user()->id)->first();
        return redirect()->route('gradepoint')->with('myGpa', $myGpa);

    }
}