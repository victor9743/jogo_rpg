@extends('_layout')

@section('content')
    <form action="/raridades/salvar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Raridade</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection