<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('item_id');
            $table->integer('cause_id')->unsigned();
            $table->string('item_name');
            $table->text('item_description');
            $table->integer('item_worth');
            $table->integer('item_required');
            $table->integer('item_received');
            $table->integer('item_promised');
            // $table->timestamps();
            $table->foreign('cause_id')->references('cause_id')->on('cause');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item');
    }
}
