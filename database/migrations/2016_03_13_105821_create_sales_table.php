<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->integer('customer_id');
            $blueprint->integer('vendor_id');
            $blueprint->dateTime('sale_date');
            $blueprint->float('sum_total');

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
        Schema::drop('sales');
    }
}
