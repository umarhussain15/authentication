<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('ngo_name');
            $table->string('ngo_email')->unique();
            $table->string('ngo_phone')->unique();
            $table->string('ngo_image');
            $table->string('ngo_cover');
            $table->text('ngo_description');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ngo');
    }
}
