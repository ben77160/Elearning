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
       return redirect()->route('cart.index');
    }

    public function destroy($id){
        \Cart::session(Auth::user()->id)->remove($id);
        return redirect()->route('cart.index')->with('success', 'Cours supprimé de votre panier.');
    }

    public function clear(){
      $cart = \Cart::session(Auth::user()->id);
      foreach ($cart->getContent() as $cartItem){
          $cart->remove($cartItem->id);
      }
      return redirect()->route('cart.index')->with('success',
          'Votre panier a bien été vidé');
    }
}
