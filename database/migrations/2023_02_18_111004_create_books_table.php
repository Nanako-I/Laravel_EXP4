<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
     {
         Schema::create('books', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('title');//追記
						 $table->text('body');//追記
             $table->timestamps();
         });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
