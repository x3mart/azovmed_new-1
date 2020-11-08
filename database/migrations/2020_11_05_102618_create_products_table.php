<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alias', 255)->unique();
            $table->string('name', 255)->unique();
            $table->string('title', 255);
            $table->string('meta_description', 255)->nullable();
            $table->integer('category_id');
            $table->text('body')->nullable();
            $table->boolean('is_visible')->nullable();
            $table->boolean('is_sale')->nullable();
            $table->integer('position')->nullable()->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
