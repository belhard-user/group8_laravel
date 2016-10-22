<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitAutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('brand_id')->unsigned();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('mods', function (Blueprint $table) {
            $table->increments('id');

            $table->bigInteger('mark_id')->unsigned();
            $table->string('color', 50);
            $table->integer('engine_type');
            $table->integer('boxrr');
            $table->string('engine_value');
            $table->date('year');

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
        Schema::dropIfExists('brands');
        Schema::dropIfExists('marks');
        Schema::dropIfExists('mods');
    }
}
