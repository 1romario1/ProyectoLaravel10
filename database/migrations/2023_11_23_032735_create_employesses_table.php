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
        Schema::create('employesses', function (Blueprint $table) {
            $table->id('id_employesses');
            $table->foreignId('id');
            $table->string('direccion');
            $table->string('cargo');
            $table->float('salario');
            $table->date('fecha_admision');
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('employesses');
    }
};
