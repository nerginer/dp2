<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Dp;
use App\tag;
use App\Category;



use Illuminate\Support\Facades\Validator;




class DpController extends Controller
{
    
    
//       public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    
     public function index()
    {
        $dps = Dp::Paginate(4);
        $tags =tag::all();
        $categories = Category::all();
        $tag=0;
        
        
       // return $dps;
      //  return view('dps.index')->with('categories', 'dps','tag');
        
        return view('dps.index',array('dps' => $dps,'tags' => $tags,'tag' => $tag,'categories' =>$categories));
     //compact('categories'),compact('dps'),compact('tag'));
    }
    
     public function show(DP $dp)
    {
       
        //$tags = $dp->tags();
        //return $tags;
		
		if(\Auth::check())
		{
		   if(\DB::table('dp_likes')->where("user_id",\Auth::user()->id)->where('dp_id',$dp->id)->count()>0)
	       {	
			$userLiked=1;
		   }
		   else
		   {
			  $userLiked=0; 
		   }
		}
		else
		{
		  $userLiked=0;	
			
		}
	    $totalLikes=\DB::table('dp_likes')->where('dp_id',$dp->id)->count();
        return view('dps.show',compact('dp'))->with("isUserLiked",$userLiked)->with("totalLikes",$totalLikes);
    }

     public function tag(tag $tag)
    {
       
       $dps = $tag->dps()->Paginate(4);
       $tags =tag::all();
       $categories = Category::all();
       //return $dps;
       return view('dps.index',array('dps' => $dps,'tags' => $tags,'tag' => $tag,'categories' =>$categories));
       //return view('dps.index',compact('dps'),compact('tag'));
        
    }
    
     public function category(category $category)
    {
  
  
   //   if ($category->parent_id==0) {
        
           
        //  $tempCategories = Category::where('parent_id',$category->id)->get();
     
         // foreach ($tempCategories as $tempCategory )    {      
              
     //       $dps = $tempCategory->dps()->get();
       //   }
           
         //  dd($dps);
          
    //      $tags =tag::all();
    //      $categories = Category::all();
    //      return view('dps.index', compact('dps','tags','category','categories'));
           
   //    }else {
  
  
      
           $dps = $category->dps()->Paginate(4);
           
           $tags =tag::all();
           $categories = Category::all();
           //return $dps;
        //   return view('dps.index',array('dps' => $dps,'tags' => $tags,'category' => $category,'categories' =>$categories));
           return view('dps.index', compact('dps','tags','category','categories'));
           
           //return view('dps.index',compact('dps'),compact('tag'));
       
      // }
        
    }
    
    public function search(Request $request)
    {
       	// Gets the query string from our form submission 
        $search = \Request::get('search');
       	
       	$dps = Dp::where('name', 'LIKE', '%' . $search . '%')->paginate(4);
        $tags =tag::all();
        $categories = Category::all();
        $tag = 0;  
        
        return view('dps.index',array('dps' => $dps,'tags' => $tags,'tag' => $tag,'categories' =>$categories));
        
        

     }
     
     public function sendForm(Request $request)
    {
       
        //Get all the data and store it inside Store Variable
        $data = $request->all();
        
       //dd($data);
        
        $user  = \Auth::user();
        
      //  return $data;

        //Validation rules
        //{"_token":"dMKekQkq5Wqn4efEiXlNuEaYqpUIkU63HGwMed2c","name":"TestName","description":"Testdescription","baseComponent":"testbase","pdf":"testbaselink","val":"open","opensourceproject":"opensourcelink","tags":"teattag1,teattag2","eaglefile":"Breadboard_power r3.sch"}
        $rules = array (
            'name' => 'required',// uncomment if you want to grab this field
            //'description' => 'required|min:10',
          //  'email' => 'required|email', // uncomment if you want to grab this field
            'eaglefile' => 'required',
        );

        //Validate data
        $validator = Validator::make ($data, $rules);

        //If everything is correct than run passes.
        if ($validator -> passes()){
            
            $destinationPath='uploads/';
            $filename = uniqid() . '_eaglefile.sch';
            $request->file('eaglefile')->move($destinationPath,$filename);
            
           

           \Mail::send('emails.newDp',  array('user' => $user,'data' => $data), function($message) use ($data)
            {
                //$message->from($data['email'] , $data['first_name']); uncomment if using first name and email fields 
                $message->from('newDP@makerstorage', 'New Design Pattern Arrived');
                //email 'To' field: cahnge this to emails that you want to be notified.                    
                $message->to('nerginer@gmail.com', 'Nuri')->cc('nerginer@gnexlab.com')->subject('New Design Pattern');

            });
                 
                 
                 // Redirect to page
                 return view('message')->with('message', 'Your message has been sent. Thank You!');


               
        }else{
                //return contact form with errors
               
                $errors = $validator->errors()->all();
                // return $errors;
                return view('message')->with('errors',$errors);
               // return view('message',compact($errors));
                
                

        }
     }
    
    
        
   public function incLikes($dp_id)
   {
	 if(\Auth::check())
	 { 
		  if($_GET['type']=='like')
		  {   
			   if(\DB::table('dp_likes')->where("user_id",\Auth::user()->id)->where('dp_id',$dp_id)->count()==0)
			   {
				  $ar=[];
				  $ar['user_id']=\Auth::user()->id;
				  $ar['dp_id']=$dp_id;
				  \DB::table('dp_likes')->insert($ar);
				   $response['type']="success";  
			   }
			   else
			   {
				  $response['type']="error"; 
				   
			   }
		  }
		  else
		  {
			  
			  \DB::table('dp_likes')->where("user_id",\Auth::user()->id)->where('dp_id',$dp_id)->delete();
			  
		  }
	    $response['total_likes'] =\DB::table('dp_likes')->where("dp_id",$dp_id)->count();
	    return $response;
	 }
        
   }
        
    
    public function licence()
    {
        return view('licence');
    }
    
     public function message()
    {
        return view('message');
    }
     
}
