@extends('_layout')

@section('content')
	<h3>Pokemons</h3>
    <form action="/pokemon/salvar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container" >
            <div class="row container" style="border: 1px solid red">
                <div class="mb-3 col-12" style="border: 1px solid green">
                    <label for="nome" class="form-label">Pokémon</label>
                    <input type = "text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-12">
                    <label for="img_frente" class="form-label">Imagem de frente</label>
                    <input type="file" class="form-control" id="img_frente" class="img_frente">
                </div>
                <div class="mb-3 col-12">
                    <label for="img_costa" class="form-label">Imagem de Costas</label>
                    <input type="file" class="form-control" id="img_costa" name="img_costa">
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label" for="tipo_raridade">Tipo de raridade</label>
                    <select class="form-select" aria-label="Default select example" id="tipo_raridade" name="tipo_raridade">
                        <option selected>Selecione...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label" for="tipo1">Tipo 1</label>
                    <select class="form-select" aria-label="Default select example" id="tipo1" class="tipo1">
                        <option selected>Selecione...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label" for="tipo2">Tipo 2</label>
                    <select class="form-select" aria-label="Default select example" id="tipo2" class="tipo2">
                        <option selected>Selecione...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                
            </div>
        </div>
    </form>
	
@endsection