<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dp extends Model
{
    
    public function proposals()
    {
       return $this->belongsToMany(Proposal::class,"proposal_dp");
       
    }
    
    public function tags()
    {
       return $this->belongsToMany(tag::class);
       
    }

    public function categories()
    {
       return $this->belongsToMany(Category::class,"dp_category");
       
    }

	public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    

  
 

}
