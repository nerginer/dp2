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
    
         public function show(Proposal $proposal)
    {
       
       
        return view('proposals.show',compact('proposal'));
    }
    
      public function tag(tag $tag)
    {
       
       $proposals = $tag->proposals()->Paginate(4);
       $tags =tag::all();
     
       //return $dps;
       return view('proposals.index',array('proposals' => $proposals,'tags' => $tags,'tag' => $tag));
       //return view('dps.index',compact('dps'),compact('tag'));
        
    }
    
     public function search(Request $request)
    {
       	// Gets the query string from our form submission 
        $search = \Request::get('search');
       	
       	$proposals = Proposal::where('name', 'LIKE', '%' . $search . '%')->paginate(4);
        $tags =tag::all();
        
        $tag = 0;  
        
        return view('proposals.index',array('proposals' => $proposals,'tags' => $tags,'tag' => $tag));
        
        

     }

}
