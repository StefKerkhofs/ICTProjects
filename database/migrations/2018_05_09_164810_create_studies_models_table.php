<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->increments('study_id');
            $table->integer('major_id');
            $table->string('name', 255);
            //$table->foreign('major_id')->references('major_id')->on('majors');

            $table->timestamps();
        });

        DB::table('studies')->insert(
            array(
                'major_id' => 0,
                'name' => 'ELO-ICT'
            )
        );
        DB::table('studies')->insert(
            array(
                'major_id' => 1,
                'name' => 'ELO-ICT'
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
        Schema::dropIfExists('studies_models');
    }
}
