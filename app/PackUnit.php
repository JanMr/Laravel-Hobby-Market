<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackUnit extends Model
{
    protected $table = 'packing_units';
    
    // povezava enota mere izdelki - več izdelkov ima lahko isto enoto mere
    public function products(){
        return $this->hasMany('App\Product');
    }
}
