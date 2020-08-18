<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
       $category = Category::where('id', 2)->firstOrfail();
       dd($category->courses);
        return view('main.home');
    }
}
