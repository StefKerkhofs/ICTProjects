<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipCodesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_codes', function (Blueprint $table) {
            $table->increments('zipcode_id');
            $table->string('town');
            //$table->timestamps();
        });

        DB::table('zip_codes')->insert([
                'town' => 'Hasselt'
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_codes_models');
    }
}
