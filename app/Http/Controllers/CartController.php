<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    public function getCart()
    {
        return view('cart');
    }
    public function removeItem($id)
   {
    Cart::remove($id);

    if (Cart::isEmpty()) {
        return redirect('/');
    }
    return redirect()->back()->with('message', 'Item removed from cart successfully.');
   }
public function clearCart()
   {
    Cart::clear();

    return redirect('/');
}
}