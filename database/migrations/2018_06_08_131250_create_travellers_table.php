<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travellers', function (Blueprint $table) {
            $table->increments('traveller_id');
            $table->integer('user_id')->unsigned();
            $table->integer('trip_id')->unsigned();
            $table->integer('major_id')->unsigned()->nullable();
            $table->integer('zip_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('city');
            $table->string('country', 11);
            $table->string('address', 255);
            $table->string('sex', 11);
            $table->string('phone', 255);
            $table->string('emergency_phone_1', 255);
            $table->string('emergency_phone_2', 255)->nullable();
            $table->string('nationality', 255);
            $table->string('birthdate');
            $table->string('birthplace', 255);
            $table->boolean('medical_issue');
            $table->longText('medical_info')->nullable();
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('major_id')->references('major_id')->on('majors');
            $table->foreign('trip_id')->references('trip_id')->on('trips');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('zip_id')->references('zip_id')->on('zips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travellers');
    }
}
