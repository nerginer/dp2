<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Proposal;
use App\tag;

class ProposalController extends Controller
{
        public function index()
    {
        $proposals = Proposal::Paginate(10);
        $tags =tag::all();
        $tag=0;
        
        
       // return $dps;
      //  return view('dps.index')->with('categories', 'dps','tag');
        
        return view('proposals.index',array('proposals' => $proposals,'tags' => $tags,'tag' => $tag));
     //compact('categories'),compact('dps'),compact('tag'));
    }

}
