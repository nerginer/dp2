<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Dp;
use App\Category;


class CreateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dp_create()
    {
        return view('dps.create');
    }
    
    public function proposal_create()
    {
         $dps = Dp::all();
        return view('proposals.create',compact('dps'));
    }


}
