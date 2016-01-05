<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->increments('message_id');
            $table->integer('user_id')->unsigned();
            $table->string('sender');
            $table->string('message_subject');
            $table->text('message_body');
            $table->timestamp('sent_date');
            
            $table->foreign('user_id')->references('user_id')->on('ngo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message');
    }
}
