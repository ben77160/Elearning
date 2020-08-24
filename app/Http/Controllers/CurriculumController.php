<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $course = Course::find($id);
        return view('Instructor.curriculum.index',[
            'course' => $course
        ]);
    }

}
