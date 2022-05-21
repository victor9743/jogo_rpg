<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokemons_controller extends Controller
{
    public function index() {

    }

    public function criar(Request $campos) {
        /*
        $conexao = new tiposraridade;
        $conexao->nome = $campos->nome;
        $conexao->img_frente = $campos->img_frente;
        $conexao->img_costa = $campos->img_costa;
        $conexao->tipo_raridade = $campos->tipo_raridade;
        $conexao->descricao = $campos->tipo1;
        $conexao->descricao = $campos->tipo2;*/
    

        return redirect ("pokemons/index");
    }
}
