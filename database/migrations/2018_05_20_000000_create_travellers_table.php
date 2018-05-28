<?php

use Illuminate\Support\Facades\DB;
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
            $table->integer('trip_id')->unsigned();
            $table->integer('study_id')->unsigned()->nullable();
            $table->string('user_id');
            $table->integer('zip_code_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('city');
            $table->string('country',11);
            $table->string('address',255);
            $table->string('sex',11);
            $table->string('phone',255);
            $table->string('emergency_phone_1',255);
            $table->string('emergency_phone_2',255)->nullable();
            $table->string('nationality',255);
            $table->string('birthdate');
            $table->string('birthplace',255);
            $table->string('MedicalIssue');
            $table->longText('medical_info')->nullable();
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('study_id')->references('study_id')->on('studies');
            $table->foreign('trip_id')->references('trip_id')->on('trips');
            //$table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('zip_code_id')->references('zip_code_id')->on('zip_codes');
        });

        // Insert some stuff
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
