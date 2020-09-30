<?php

namespace App\Http\Controllers;

use App\Course;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function store($id){
       $course = Course::find($id);

       $add = \Cart::session(Auth::user()->id)->add([
           'id' => $course->id,
           'name' => $course->title,
           'price' => $course->price,
           'quantity' => 1,
           'associatedModel' => $course
       ]);
       return redirect()->route('cart.index',[

       ]);
    }
}
