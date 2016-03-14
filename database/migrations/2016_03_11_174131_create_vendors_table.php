<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function( Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->string('name', 155);
            $blueprint->string('surname', 155);
            $blueprint->string('email')->uinque();
            $blueprint->string('phone')->nullable();

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
      Schema::drop('vendors');
    }
}
