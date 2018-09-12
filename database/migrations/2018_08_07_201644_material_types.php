<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterialTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('meta0')->nullable();
            $table->string('meta1')->nullable();
            $table->string('meta2')->nullable();
            $table->string('meta3')->nullable();
            $table->string('meta4')->nullable();
            $table->string('meta5')->nullable();
            $table->string('meta6')->nullable();
            $table->string('meta7')->nullable();
            $table->string('meta8')->nullable();
            $table->string('meta9')->nullable();
            $table->string('meta10')->nullable();
            $table->string('meta11')->nullable();
            $table->string('meta12')->nullable();
            $table->string('meta13')->nullable();
            $table->string('meta14')->nullable();
            $table->string('meta15')->nullable();
            $table->string('meta16')->nullable();
            $table->string('meta17')->nullable();
            $table->string('meta18')->nullable();
            $table->string('meta19')->nullable();
            $table->string('meta20')->nullable();
            $table->string('meta21')->nullable();
            $table->string('meta22')->nullable();
            $table->string('meta23')->nullable();
            $table->string('meta24')->nullable();
            $table->string('meta25')->nullable();
            $table->string('meta26')->nullable();
            $table->string('meta27')->nullable();
            $table->string('meta28')->nullable();
            $table->string('meta29')->nullable();
            $table->string('meta30')->nullable();
            $table->string('meta31')->nullable();
            $table->string('meta32')->nullable();
            $table->string('meta33')->nullable();
            $table->string('meta34')->nullable();
            $table->string('meta35')->nullable();
            $table->string('meta36')->nullable();
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
        Schema::dropIfExists('material_types');
    }
}
