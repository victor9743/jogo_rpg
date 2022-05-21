<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tiporaridade;

class raridade_controller extends Controller
{
    public function criar(Request $campos) {
        $conexao = new tiporaridade;

        $conexao->nome = $campos->nome;

        $conexao->save();

        return redirect ("/raridades");
    
    }
}
