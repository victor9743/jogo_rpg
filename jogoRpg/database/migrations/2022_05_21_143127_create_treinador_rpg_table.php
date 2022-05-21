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
        Schema::create('treinador_rpg', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('tipo_treinador');
            $table->json('pokemons');
            $table->timestamps();

            $table->foreign('tipo_treinador')->references('id')->on('tipotreinadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinador_rpg');
    }
};
