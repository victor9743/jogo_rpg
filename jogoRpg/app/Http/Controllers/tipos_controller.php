<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipoelemento;

class tipos_controller extends Controller
{
    public function criar(Request $campos) {
        $conexao = new tipoelemento;

        $conexao->descricao = $campos->descricao;
        $conexao->img_descricao = $campos->img_descricao;

        if($campos->hasFile('img_descricao') && $campos->file('img_descricao')->isValid())
        $requestImage = $campos->img_descricao;

        // atribuir a variavel a extensão do arquivo
        $extension = $requestImage->extension();

        // cria uma hash e concatena com o tempo atual
        $imageName = md5($requestImage->getClientOriginalName().strtotime("now") . "." . $extension);

        // mover o arquivo/imagem para o diretório
        $campos->img_descricao->move(public_path('img/atributos'), $imageName);

        // salvar a url do arquivo/imagem no banco
        $conexao->img_descricao = $imageName;
        $conexao->save();

        return redirect("/tipos");
    }
}
