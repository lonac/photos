<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    Schema::create('sheets', function (Blueprint $table) {
           $table->increments('id');
           $table->string('firstname');
           $table->string('middlename');
           $table->string('surname');
           $table->string('sex');
           $table->timestamps();
       });
   }
   public function down()
   {
       Schema::drop("sheets");
   }
}
