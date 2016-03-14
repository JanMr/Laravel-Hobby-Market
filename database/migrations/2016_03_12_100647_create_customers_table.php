<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $blueprint){
            $blueprint->increments('id');
            $blueprint->string('name');
            $blueprint->string('surname');
            $blueprint->string('email')->unique();
            $blueprint->string('address');
            $blueprint->integer('zip');
            $blueprint->string('city');

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
        Schema::drop('customers');
    }
}
