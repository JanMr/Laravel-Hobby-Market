<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors';
    
    // povezava prodajalec prodaja one-to-many
    public function sales()
    {
        $this->hasMany('App\Sale');
    }
}
