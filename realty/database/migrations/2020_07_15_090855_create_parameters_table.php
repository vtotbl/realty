<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('parameters-estate_objects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('estate_object_id');
            $table->bigInteger('parameter_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parameters-estate_objects');
        Schema::dropIfExists('parameters');
    }
}
