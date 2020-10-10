<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('currency_id')->constrained();
        });
        Schema::table('images', function (Blueprint $table) {
            $table->foreignId('offer_id')->constrained()
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->foreignId('region_id')->constrained();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('rubric_id')->constrained();
        });
        Schema::table('attrs', function (Blueprint $table) {
            $table->foreignId('attr_group_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('category_id');
            $table->dropForeign('city_id');
            $table->dropForeign('currency_id');
        });
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('offer_id');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign('region_id');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('rubric_id');
        });
        Schema::table('attrs', function (Blueprint $table) {
            $table->dropForeign('attr_group_id');
        });
    }
}
