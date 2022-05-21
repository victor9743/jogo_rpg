@extends('_layout')


@section('content')
	<h3>Pokemons</h3>
    
    <button class="btn btn-primary" ><a href="{{ url('/pokemons/novo') }}" class="text-sm text-light">Cadastrar</a></button>
	
@endsection