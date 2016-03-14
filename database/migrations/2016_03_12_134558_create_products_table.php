<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->string('name');
            $blueprint->integer('packing_unit_id');
            $blueprint->integer('supplier_id');
            $blueprint->text('description');
            $blueprint->float('unit_price');
            $blueprint->string('img_url');
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
