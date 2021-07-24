<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_works', function (Blueprint $table) {
            $table->id();
            $table->char('wb_indexText39', 255)->nullable();
            $table->char('wb_indexText41', 255)->nullable();
            $table->char('wb_indexText40', 255)->nullable();
            $table->char('wb_indexText42', 255)->nullable();
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
        Schema::dropIfExists('how_works');
    }
}
