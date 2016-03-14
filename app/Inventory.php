<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';
    
    // povezava izdelek zaloga 
    public function product(){
        return $this->hasMany('App\Product');
    }
}
