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
            $table->integer('zipcode_id');
            $table->integer('study_id')->nullable();
            $table->integer('trip_id');
            $table->string('user_id');
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

            //$table->foreign('study_id')->references('study_id')->on('studies');
            //$table->foreign('trip_id')->references('trip_id')->on('trips');
            //$table->foreign('user_id')->references('user_id')->on('users');
            //$table->foreign('zipcode_id')->references('zipcode_id')->on('zipcodes');
        });

        // Insert some stuff

        DB::table('travellers')->insert(
            array(
                'zipcode_id' => 0,
                'study_id' => 0,
                'trip_id' => 0,
                'user_id' => 0,
                'firstname' => 'jos',
                'lastname' => 'potter',
                'city' => 'averbode',
                'country' => 'belgië',
                'address' => 'heesterweg 7',
                'sex' => 'man',
                'phone' => '0471487952',
                'emergency_phone_1' => '0472597432',
                'emergency_phone_2' => '0471652518',
                'nationality' => 'belg',
                'birthdate' => '1998',
                'birthplace' => 'Zichem',
                'MedicalIssue' => '',
                'medical_info' => ''
            )
        );
        DB::table('travellers')->insert(
            array(
                'zipcode_id' => 0,
                'study_id' => 0,
                'trip_id' => 0,
                'user_id' => 0,
                'firstname' => 'jefke',
                'lastname' => 'azerty',
                'city' => 'averbode',
                'country' => 'belgië',
                'address' => 'heesterweg 7',
                'sex' => 'man',
                'phone' => '0471487952',
                'emergency_phone_1' => '0472597432',
                'emergency_phone_2' => '0471652518',
                'nationality' => 'belg',
                'birthdate' => '1998',
                'birthplace' => 'Zichem',
                'MedicalIssue' => '',
                'medical_info' => ''
            )
        );

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
