@extends('template',['title'=>"Cursos EAD "])
@section('conteudo')
		<h1>Cursos EAD </h1>
		<h2> Categorias a construir </h2>

<p class="text-center"><a href="{{ route("categorias.create") }}" title="Nova categoria">Cadastrar uma nova categoria </a></p>
@forelse($categorias as $categoria)
		<h3>{{ $categoria->nome }}</h3>
		
		@empty
		<p>Não existem categorias  cadastrados</p>
		@endforelse

		@endsection
		