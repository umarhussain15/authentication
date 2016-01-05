<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cause', function (Blueprint $table) {
            $table->increments('cause_id');
            $table->integer('user_id')->unsigned();
            $table->string('cause_title');
            $table->string('cause_venue');
            $table->string('cause_cover');
            $table->text('cause_description');
            $table->boolean('is_completed')->default(False);
            $table->timestamp('started');
            $table->timestamp('finished');

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
        Schema::drop('cause');
    }
}
