<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses()
    {
        $courses = Course::where('is_published', true)->get();
         return view('courses.index',[
             'courses' => $courses
         ]);
    }
}
