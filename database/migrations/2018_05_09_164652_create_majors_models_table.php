<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMajorsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->increments('major_id');
            $table->string('name', 255);
            //$table->timestamps();
        });

        DB::table('majors')->insert(
            array(
                'name' => 'ICT',
            )
        );
        DB::table('majors')->insert(
            array(
                'name' => 'ELO',
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
        Schema::dropIfExists('majors_models');
    }
}
