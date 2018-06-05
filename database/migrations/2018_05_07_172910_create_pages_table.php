<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('page_id');
            $table->string('page_name');
<<<<<<< HEAD
            $table->string('page_content');
            $table->string('page_type');
            $table->timestamps();
        });

        DB::table('pages')->insert(array(
            'page_name' => 'info',
            'page_content' => 'Dit is content',
            'page_type' => 'html',
        ));
=======
            $table->text('page_content');
            $table->string('page_type');
            $table->timestamps();
        });
>>>>>>> back-end
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
