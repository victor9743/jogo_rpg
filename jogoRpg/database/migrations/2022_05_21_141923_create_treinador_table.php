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
        Schema::create('treinador', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('sexo',['M', 'F']);
            $table->json('insignias');
            $table->json('items');
            $table->json('pokemons');
            $table->unsignedBigInteger("personagem_id");
            $table->timestamps();

            $table->foreign('personagem_id')->references('id')->on('personagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinador');
    }
};
