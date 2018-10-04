<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //
    public function subgroup(){
        return $this->hasMany('App\groupsubjects','mainid','id');
    }
}
