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
            $table->string('name');
            $table->integer('account_id');
            $table->text('description');
            $table->dateTime('valid_from');
            $table->dateTime('valid_to');
            $table->string('original_price');
            $table->string('new_price');
            $table->text('lat');
            $table->text('lng');
            $table->text('location');
            $table->integer('is_hot');
            $table->string('code');
            $table->text('online_url');
            $table->text('image_preview');
            $table->integer('status');
            $table->timestamps();
            $table->integer('category_id');
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
