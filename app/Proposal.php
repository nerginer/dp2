<?php

namespace App;
use App\Dp;
use Illuminate\Database\Eloquent\Model;


class Proposal extends Model
{
    
    public function dps()
    {
       return $this->belongsToMany(dp::class,"proposal_dp");
       
    }
    
    
    public function tags()
    {
       return $this->belongsToMany(tag::class);
       
    }


	public function user()
    {
        return $this->belongsTo(User::class);
    }

  
 

}
