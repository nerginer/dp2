<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dp extends Model
{
      public function tags()
    {
       return $this->belongsToMany(tag::class);
       
    }

    public function categories()
    {
       return $this->belongsToMany(Category::class);
       
    }

	public function user()
    {
        return $this->belongsTo(User::class);
    }

  
 

}
