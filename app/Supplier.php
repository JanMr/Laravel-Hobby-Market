<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    // vsak dobavitelj dobavlja več različnih izdelkov 
    public function products(){
        return $this->hasMany('App\Product');
    }
}
