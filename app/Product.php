<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    // povezava izdelek enota mere
    public function packingUnit()
    {
        return $this->belongsTo('App\PackUnit');
    }

    // povezhava izdelek dobavitelj
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    // povezava izdelki prodaja many_to_many tabela products_sales
    public function sales()
    {
        return $this->belongsToMany('App\Sale', 'products_sales')->withPivot('quantity');
    }

    // povezava izdelek zaloga
    public function stock()
    {
        return $this->belongsTo('App\Inventory');
    }
}
