<?php

namespace App\Http\Controllers;

use App\Course;
use App\Section;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('instructor.curriculum.index',[
            'course' => $course
        ]);
    }

    public function create($id)
    {
        $course = Course::find($id);
        return view('instructor.curriculum.create',[
            'course' => $course
        ]);
    }

    public function store(Request $request, $id)
    {
        $slugify = new Slugify();
        $section = new Section();
        $course = Course::find($id);

        $section->name = $request->input('section_name');
        $section->slug = $slugify->slugify($section->name);
        $video = $request->file('section_video');
        $fileFullname = $video->getClientOriginalName();
        $filename = pathinfo($fileFullname, PATHINFO_FILENAME);
        $extension = $video->getClientOriginalExtension();
        $file = time() . '_' . $filename . '_'. $extension;
        $video->storeAs('public/courses_sections/' . Auth::user()->id, $file);

        $section->video = $file;
        $section->course_id = $id;

        $getID3 = new \getID3();
        $pathVideo = 'storage/courses_sections/'. Auth::user()->id. '/' .$file;
        $fileAnalyze = $getID3->analyze($pathVideo);
        $playtime = $fileAnalyze('playtime_string');
        $section->playtime_seconds = $playtime;

        $section->save();
        return redirect()->route('instructor.curriculum.index', $course->id);
    }
}
