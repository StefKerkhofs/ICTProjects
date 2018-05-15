<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->string('trip_name');
            $table->integer('trip_year');
            $table->integer('trip_price');
            $table->boolean('is_active');
            $table->string('trip_contact');
            //$table->timestamps();
        });
        DB::table('trips')->insert(array(
            'trip_name' => 'amerika',
            'trip_year' => 2000,
            'is_active' => true,
            'trip_contact'=>'kaan@akpinar.be',
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
