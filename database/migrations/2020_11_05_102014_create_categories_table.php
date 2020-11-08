<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alias', 255)->unique();
            $table->string('name', 255)->unique();
            $table->string('title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->text('body')->nullable();
            $table->integer('position')->nullable()->unique();
            $table->boolean('is_visible')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
