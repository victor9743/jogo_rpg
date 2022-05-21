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
        Schema::create('pokemons', function (Blueprint $table) {
                $table->id();
                $table->string('nome')->unique();
                $table->string('img_frente');
                $table->string('img_costa');
                $table->unsignedBigInteger('tipo_raridade');
                $table->text('descricao');
                $table->unsignedBigInteger('tipo1');
                $table->unsignedBigInteger('tipo2');
                $table->timestamps();
    
                $table->foreign('tipo1')->references('id')->on('tipoelementos');
                $table->foreign('tipo2')->references('id')->on('tipoelementos');
    
               $table->foreign('tipo_raridade')->references('id')->on('tiporaridades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
};
