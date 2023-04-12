<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->smallInteger('bootstrap')->nullable();
            $table->smallInteger('laravel')->nullable();
            $table->smallInteger('mysql')->nullable();
            $table->smallInteger('git')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropDown('bootstrap');
            $table->dropDown('laravel');
            $table->dropDown('mysql');
            $table->dropDown('git');
        });
    }
};
