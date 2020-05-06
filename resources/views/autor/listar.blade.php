@extends('template',['title'=>"Cursos EAD - Autores"])
@section('conteudo')
		<h1>Autores Cadastrados</h1>
		
<p class="text-center"><a href="{{ route("autores.create") }}" title="Novo autor">Cadastrar um novo autor </a></p>
@forelse($autores as $autor)
		<h3>{{ $autor->nome }}</h3>
		
		@empty
		<p>Não existem autores  cadastrados</p>
		@endforelse

		@endsection
		