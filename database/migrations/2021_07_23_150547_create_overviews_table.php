<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overviews', function (Blueprint $table) {
            $table->id();
            $table->char('wb_indexText7', 50)->nullable();
            $table->char('wb_indexText2', 50)->nullable();
            $table->char('wb_indexText10', 50)->nullable();
            $table->char('wb_indexText9', 50)->nullable();
            $table->char('wb_indexText6_digit', 50)->nullable();
            $table->char('wb_indexText6_text', 50)->nullable();
            $table->char('wb_indexText11', 50)->nullable();
            $table->char('wb_indexText55', 50)->nullable();
            $table->char('wb_indexText56', 50)->nullable();
            $table->char('wb_indexText57', 50)->nullable();
            $table->char('wb_indexText12', 50)->nullable();
            $table->char('wb_indexText13', 50)->nullable();
            $table->char('wb_indexText59', 50)->nullable();
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
        Schema::dropIfExists('overviews');
    }
}
