@extends('_layout')

@section('content')
    <h3>Tipos</h3>
    
    <form action="/tipos/salvar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="img_descricao" class="form-label">Imagem da descrição</label>
            <input type="file" class="form-control" id="img_descricao" name="img_descricao">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection