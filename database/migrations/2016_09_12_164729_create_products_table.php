<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('account_id')->nullable();
            $table->integer('price')->nullable();
            $table->string('source')->nullable();
            $table->text('image_preview')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->string('product_url')->nullable();
            $table->string('aff_link')->nullable();
            $table->string('product_version')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('products');
    }
}
