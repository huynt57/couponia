<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('account_id')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('valid_from')->nullable();
            $table->dateTime('valid_to')->nullable();
            $table->string('original_price')->nullable();
            $table->string('new_price')->nullable();
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->text('location')->nullable();
            $table->integer('is_hot')->nullable();
            $table->string('code')->nullable();
            $table->text('online_url')->nullable();
            $table->text('image_preview')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->integer('category_id')->nullable();
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
        Schema::drop('deals');
    }
}
