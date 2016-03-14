<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    // povezava prodaja izdelki many to many products_sales tabela 
    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_sales')->withPivot('quantity');
    }
    // povezava prodaja prodajalec one-to-many
    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
        
    }
    
    // povezava prodaja kupec one-to-many
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
