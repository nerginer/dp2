<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Proposal extends Model
{
      public function tags()
    {
       return $this->belongsToMany(tag::class);
       
    }


	public function user()
    {
        return $this->belongsTo(User::class);
    }

  
 

}
