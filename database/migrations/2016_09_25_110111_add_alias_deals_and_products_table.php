<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAliasDealsAndProductsTable extends Migration
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
            $table->text('alias')->nullable();

        });

        Schema::table('products', function (Blueprint $table) {
            $table->text('alias')->nullable();

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
            $table->dropColumn('alias');

        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('alias');

        });
    }
}
