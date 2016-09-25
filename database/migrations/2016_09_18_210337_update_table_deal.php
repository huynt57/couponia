<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableDeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('deals', function (Blueprint $table) {
            $table->text('condition')->nullable();
            $table->text('category_name')->nullable();

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
        Schema::table('deals', function (Blueprint $table) {
            $table->dropColumn('condition');
            $table->dropColumn('category_name');
        });
    }
}
