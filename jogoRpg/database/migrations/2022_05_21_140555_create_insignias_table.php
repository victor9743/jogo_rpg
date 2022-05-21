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
        Schema::create('insignias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('img_insignia');
            $table->unsignedBigInteger('id_regiao');
            $table->timestamps();

            $table->foreign('id_regiao')->references('id')->on('regioes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insignias');
    }
};
