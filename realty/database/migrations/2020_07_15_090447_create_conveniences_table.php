<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConveniencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conveniences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('conveniences-estate_objects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estate_object_id');
            $table->bigInteger('convenience_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conveniences-estate_objects');
        Schema::dropIfExists('conveniences');
    }
}
