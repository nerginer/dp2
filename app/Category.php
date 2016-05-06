<?php

namespace App;

use App\Dp;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
       public function dps()
    {
       return $this->belongsToMany(dp::class,"dp_category");
       
    }

 
       
}







