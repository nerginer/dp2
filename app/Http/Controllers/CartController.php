<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dp;

use Cart;

class CartController extends Controller
{
    //
    
        public function index()
        {
            return view('cart');
        }
        
        public function store(Request $request)
        {
            
            //if (Cart::search(['id' => $request->id])) {
            //    return redirect('cart')->withSuccessMessage('Design Pattern is already in your cart!');
            //}
            
            
            
           // Cart::add($request->id, $request->name, 1, $request->price)->associate('Dp','App');
            $cartItem = Cart::add($request->id, $request->name, 1, $request->price);

            // Next we associate a model with the item.
            Cart::associate($cartItem->rowId, 'App\Dp');

            return redirect('cart')->withSuccessMessage('Design Pattern was added to your cart!');
            
           
            
        }
        
        public function destroy($id)
        {
            
           
            Cart::remove($id);
            return redirect('cart')->withSuccessMessage('Item has been removed!');
        }
        
        public function emptyCart()
        {
            Cart::destroy();
            return redirect('cart')->withSuccessMessage('Your cart his been cleared!');
        }


}
