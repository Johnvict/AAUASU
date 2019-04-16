<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Faculty;
use App\Department;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nav(){
        return view('nav');
    }


    public function getSelect(){
        $faculty = Faculty::all();
        $department = Department::all();
        return view('select')->with(['faculty' => $faculty, 'department' => $department ]);
    }
}
