<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Cocur\Slugify\Slugify;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('instructor.index');
    }

    /**
     * @return Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('instructor.create', [
            'categories' =>$categories
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slugify = new Slugify();
        $course = new Course();
        $course->title = $request->input('title');
        $course->slug = $slugify->slugify($course->title);
        $course->subtitle = $request->input('subtitle');
        $course->description = $request->input('description');
        $course->category_id = $request->input('category');
        $course->user_id = Auth::user()->id;
        $image = $request->file('image');
        $imageFullName = $image->getClientOriginalName();
        $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $file = time() . '_' .$imageName . '.' . $extension;
        $image->storeAs('public/courses/'. Auth::user()->id, $file);

        $course->image = $file;
        $course->save();

        return redirect()->route('instructor.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $categories = Category::all();
        $course = Course::find($id);
        return view('instructor.edit',[
            'course' => $course,
            'categories' => $categories
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $slugify = new Slugify();

        $course->title = $request->input('title');
        $course->slug = $slugify->slugify($course->title);
        $course->subtitle = $request->input('subtitle');
        $course->description = $request->input('description');
        $course->category_id = $request->input('category');

        if($request->file('image')){
            $image = $request->file('image');
            $imageFullName = $image->getClientOriginalName();
            $imageName = pathinfo($imageFullName, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $file = time() . '_' .$imageName . '.' . $extension;
            $image->storeAs('public/courses/'. Auth::user()->id, $file);
            $course->image;
        }
        $course->save();
        return redirect()->route('instructor.index')->with('success', 'Vos modifications ont été apportées avec succès');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('instructor.index')->with('success', 'Le cours a bien été supprimé !');
    }
}
