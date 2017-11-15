<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookroomServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookroom_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit');
            $table->integer('book_room_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->foreign('book_room_id')->references('id')
                ->on('book_rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('service_id')->references('id')
                ->on('service_hotels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('bookroom_services');
    }
}
