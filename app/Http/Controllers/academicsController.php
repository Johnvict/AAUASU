<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Result;
use Illuminate\Support\Facades\Auth;
use App\Gpa;

class academicsController extends Controller
{

    public function getCourses()
    {
        $myCourses = Course::whereUserId(Auth::user()->id)->get();

        return view('academics/courses')->with(['myCourses' => $myCourses/*, 'code' => 'CourseCode', 'level' => 'courseLEvel'*/]);
    }

    public function postCourses(Request $request, $id)
    {
        $courseCode = $request -> input('courseCode');
        $courseUnit = $request -> input('courseUnit');
        $courseGrade = $request -> input('courseGrade');
        $courseLevel = $request -> input('courseLevel');
        $courseSemester = $request -> input('courseSemester');

        $storeCourse = new Course();
        $storeCourse -> code = $courseCode;
        $storeCourse -> grade = $courseGrade;
        $storeCourse -> unit = $courseUnit;
        $storeCourse -> level = $courseLevel;
        $storeCourse -> semester = $courseSemester;
        $storeCourse -> user_id = Auth::user()->id;
        $storeCourse -> save();

        $course = Course::whereCode($courseCode)->get();
        foreach ($course as $courseDetail)
        {
            $courseId = $courseDetail->id;
        }
        $storeGrade = new Result();
        $storeGrade -> course_id = $courseId;
        if($courseGrade == 'A')
        {
            $storeGrade -> cp = 5*$courseUnit;
            $storeGrade -> resultStatus = 1;
        }
        elseif($courseGrade == 'B')
        {
            $storeGrade -> cp = 4*$courseUnit;
            $storeGrade -> resultStatus = 1;
        }
        elseif($courseGrade == 'C')
        {
            $storeGrade -> cp = 3*$courseUnit;
            $storeGrade -> resultStatus = 1;
        }
        elseif($courseGrade == 'D')
        {
            $storeGrade -> cp = 2*$courseUnit;
            $storeGrade -> resultStatus = 1;
        }
        elseif($courseGrade == 'E')
        {
            $storeGrade -> cp = 1*$courseUnit;
            $storeGrade -> resultStatus = 1;
        }
        elseif($courseGrade == 'F')
        {
            $storeGrade -> cp = 0;
            $storeGrade -> resultStatus = 1;
        }
        else
        {
            $storeGrade -> cp = 0;
            $storeGrade -> resultStatus = 0;
        }

        $storeGrade -> user_id = Auth::user()->id;
        $storeGrade -> semester = $courseSemester;
        $storeGrade -> level = $courseLevel;
        $storeGrade -> save();

        $myCourses = Course::whereUserId(Auth::user()->id)->get();

        $course = array();
        array_push($course, $storeCourse->code);
        array_push($course, $storeCourse->level);

        /*return $code."<br>".$level;
        exit();*/

        return redirect()->route('courses')->with(['course' => $course,  'myCourses' => $myCourses]);
    }
    public function deleteCourseAndResult($id){
        $deleteCourse = Course::find($id);
        $deleteCourse -> delete();

        $result = Result::whereCourseId($id)->get();

        foreach($result as $resultAtt)
        {
            $courseResult = $resultAtt->id;
        }

        $deleteResult = Result::find($courseResult);
        $deleteResult -> delete();

        $myCourses = Course::whereUserId(Auth::user()->id)->get();
        return redirect('/my-courses/')->with(['myCourses' => $myCourses]);
    }

    public function updateGrade(Request $request, $id)
    {
        $gradeNew = $request->input('courseGrade');

        $grade = Course::find($id);
        $grade->grade = $gradeNew;
        $grade->save();


        $course = Course::whereId($id)->get();
        foreach ($course as $courseAtt) {
            $courseUnit = $courseAtt->unit;
            $resultID = $courseAtt->id;
        }
        $result = Result::whereCourseId($resultID)->get();
        foreach ($result as $resultAtt) {
            $courseId = $resultAtt->id;



            $newGrade = Result::find($courseId);
            if ($gradeNew == 'A') {
                $newGrade->cp = 5 * $courseUnit;
                $newGrade->resultStatus = 1;
            } elseif ($gradeNew == 'B') {
                $newGrade->cp = 4 * $courseUnit;
                $newGrade->resultStatus = 1;
            } elseif ($gradeNew == 'C') {
                $newGrade->cp = 3 * $courseUnit;
                $newGrade->resultStatus = 1;
            } elseif ($gradeNew == 'D') {
                $newGrade->cp = 2 * $courseUnit;
                $newGrade->resultStatus = 1;
            } elseif ($gradeNew == 'E') {
                $newGrade->cp = 1 * $courseUnit;
                $newGrade->resultStatus = 1;
            } elseif ($gradeNew == 'F') {
                $newGrade->cp = 0;
                $newGrade->resultStatus = 1;
            } else {
                $newGrade->cp = 0;
                $newGrade->resultStatus = 0;
            }
        }

        $newGrade ->save();

        $myCourses = Course::whereUserId(Auth::user()->id)->get();
        return redirect('/my-courses/')->with(['myCourses' => $myCourses]);
    }

    public function getResults($id)
    {
        $courses=Course::whereUserId($id)->first();
        return view('academics/courses')->with('courses', $courses);
        return view('academics/results');
    }
    public function getSemesterResults()
    {
        return view('academics/semesterResults');
    }

}
