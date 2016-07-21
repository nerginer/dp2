<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dp;

use Cart;

class CartController extends Controller
{
    //
    
        public function __construct()
        {
            $this->middleware('auth');
        }

        
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
            $cartItem = Cart::instance(auth()->id())->add($request->id, $request->name, 1, $request->price);

            // Next we associate a model with the item.
            Cart::instance(auth()->id())->associate($cartItem->rowId, 'App\Dp');

            return redirect('cart')->withSuccessMessage('Design Pattern was added to your design cart!');
            
           
            
        }
        
        public function destroy($id)
        {
            
           
            Cart::instance(auth()->id())->remove($id);
            return redirect('cart')->withSuccessMessage('Item has been removed!');
        }
        
        public function emptyCart()
        {
            Cart::instance(auth()->id())->destroy();
            return redirect('cart')->withSuccessMessage('Your design cart his been cleared!');
        }
        
        public function runTestPython(){
            
            $arg1 = '';
            $user_name = str_replace(' ', '_', \Auth::user()->name);
            $outfilename = $user_name . '_'.uniqid().'.sch';
            
             
            foreach (Cart::instance(auth()->id())->content() as $item) {
                $arg1 = $arg1 . $item->model->slug . ' ';
            }
            
           
            //return redirect('cart')->withSuccessMessage('Item has been removed!');
            
            exec("python python/test.py ".$outfilename.' '.$arg1, $output, $return);

            if ($return) {
                throw new \Exception("Error executing command - error code: $return");
            }
            
            //var_dump($output);
            
            
            //Cart::instance(auth()->id())->destroy();
            
            return view('download_eagle')->with('myoutput', $output[0]);
            
            
            
        }


}
