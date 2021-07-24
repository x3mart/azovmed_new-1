<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privileges', function (Blueprint $table) {
            $table->id();
            $table->char('wb_indexText17', 255)->nullable();
            $table->char('wb_indexText18', 255)->nullable();
            $table->char('wb_indexText19', 255)->nullable();
            $table->char('wb_indexText20', 255)->nullable();
            $table->char('wb_indexText21', 255)->nullable();
            $table->char('wb_indexText22', 255)->nullable();
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
        Schema::dropIfExists('privileges');
    }
}
