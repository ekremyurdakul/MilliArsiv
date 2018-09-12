<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterialData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_data', function (Blueprint $table) {
            $table->increments('id');

            $table->string('data0')->nullable()->default("null");
            $table->string('data1')->nullable()->default("null");
            $table->string('data2')->nullable()->default("null");
            $table->string('data3')->nullable()->default("null");
            $table->string('data4')->nullable()->default("null");
            $table->string('data5')->nullable()->default("null");
            $table->string('data6')->nullable()->default("null");
            $table->string('data7')->nullable()->default("null");
            $table->string('data8')->nullable()->default("null");
            $table->string('data9')->nullable()->default("null");
            $table->string('data10')->nullable()->default("null");
            $table->string('data11')->nullable()->default("null");
            $table->string('data12')->nullable()->default("null");
            $table->string('data13')->nullable()->default("null");
            $table->string('data14')->nullable()->default("null");
            $table->string('data15')->nullable()->default("null");
            $table->string('data16')->nullable()->default("null");
            $table->string('data17')->nullable()->default("null");
            $table->string('data18')->nullable()->default("null");
            $table->string('data19')->nullable()->default("null");
            $table->string('data20')->nullable()->default("null");
            $table->string('data21')->nullable()->default("null");
            $table->string('data22')->nullable()->default("null");
            $table->string('data23')->nullable()->default("null");
            $table->string('data24')->nullable()->default("null");
            $table->string('data25')->nullable()->default("null");
            $table->string('data26')->nullable()->default("null");
            $table->string('data27')->nullable()->default("null");
            $table->string('data28')->nullable()->default("null");
            $table->string('data29')->nullable()->default("null");
            $table->string('data30')->nullable()->default("null");
            $table->string('data31')->nullable()->default("null");
            $table->string('data32')->nullable()->default("null");
            $table->string('data33')->nullable()->default("null");
            $table->string('data34')->nullable()->default("null");
            $table->string('data35')->nullable()->default("null");
            $table->string('data36')->nullable()->default("null");

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
        Schema::dropIfExists('material_data');
    }
}
