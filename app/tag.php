<?php

namespace App;
use App\Dp;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function dps()
    {
       return $this->belongsToMany(dp::class);
       
    }
    
     public function proposals()
    {
       return $this->belongsToMany(proposal::class);
       
    }
}
