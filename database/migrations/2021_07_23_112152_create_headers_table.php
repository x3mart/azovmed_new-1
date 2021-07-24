<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->char('wb_indexText5_main_phone', 20)->nullable();
            $table->char('wb_indexText5_email', 30)->nullable();
            $table->char('wb_indexText5_text', 30)->nullable();
            $table->char('wb_indexText3', 50)->nullable();
            $table->char('wb_indexText4', 50)->nullable();
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
        Schema::dropIfExists('headers');
    }
}
