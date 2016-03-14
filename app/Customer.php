<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    
    // povezava kupec prodaja one-to-many
    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
    
}
