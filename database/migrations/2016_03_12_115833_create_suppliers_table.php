<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('suppliers',function(Blueprint $blueprint){
          $blueprint->increments('id');
          $blueprint->string('name');
          $blueprint->string('contact_person');
          $blueprint->string('email')->unique();
          $blueprint->string('url');

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
        Schema::drop('suppliers');
    }
}
