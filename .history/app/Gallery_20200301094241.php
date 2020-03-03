<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];  
    
    protected $table = 'gallery';
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}
