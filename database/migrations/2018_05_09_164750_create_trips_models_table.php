<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripsmodels', function (Blueprint $table) {
            $table->increments('trip_id');
            $table->string('trip_name');
            $table->integer('trip_year');
            $table->integer('trip_price');
            $table->boolean('is_active');
            $table->string('trip_contact');
            //$table->timestamps();
        });

        DB::table('tripsmodels')->insert([
            'trip_name' => 'wxsdfg',
            'trip_year' => 2019,
            'trip_price' => 200,
            'is_active' => 1,
            'trip_contact' => 'aerg.dgb@qdstb.nh'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips_models');
    }
}
