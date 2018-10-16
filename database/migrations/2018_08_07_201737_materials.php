<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('locator')->nullable();
            $table->unsignedInteger('depot_id');
            $table->unsignedInteger('material_type_id');
            $table->unsignedInteger('material_group_id')->nullable();
            $table->unsignedInteger('material_data_id')->nullable();

            $table->foreign('depot_id')->references('id')->on('depots');
            $table->foreign('material_type_id')->references('id')->on('material_types');
            $table->foreign('material_group_id')->references('id')->on('material_groups');
            $table->foreign('material_data_id')->references('id')->on('material_data');
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
        Schema::dropIfExists('materials');
    }
}
