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
            $table->integer('zipcode');
            $table->integer('study_id');
            $table->integer('trip_id');
            $table->integer('user_id');
            $table->string('country',11);
            $table->string('address',255);
            $table->string('sex',11);
            $table->string('email',255);
            $table->string('phone',255);
            $table->string('emergency_phone_1',255);
            $table->string('emergency_phone_2',255);
            $table->string('nationality',255);
            $table->date('birthdate');
            $table->string('birthplace',255);
            $table->longText('medical_info');
            $table->rememberToken();
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
        Schema::dropIfExists('travellers');
    }
}
