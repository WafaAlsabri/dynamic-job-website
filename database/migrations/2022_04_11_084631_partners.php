<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Partners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('address');


            $table->unsignedBigInteger('id_city');

           
            $table->string('sector');
            $table->integer('num_emp');
            $table->string('image');
            $table->timestamps();
           $table->foreign('id_city')->references('id')->on('cities');

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
