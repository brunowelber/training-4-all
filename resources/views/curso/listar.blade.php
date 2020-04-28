@extends('template',['title'=>"Cursos EAD "])
@section('conteudo')
		<h1>Cursos EAD </h1>
		<h2> Categorias a construir </h2>

<p class="text-center"><a href="{{ route("cursos.create") }}" title="Novo curso">Cadastrar um novo curso </a></p>
@forelse($cursos as $curso)
		<h3>{{ $curso->nome }}</h3>
		<p>{{ $curso->descricaocurta }}</p>
		
		<p><a href="{{ route("curso.show",[$curso->id]) }}" title="Veja detalhes sobre esse curso">Detalhes sobre {{ $curso->nome }}</a></p>
		@empty
		<p>Não existem cursos  cadastrados</p>
		@endforelse

		@endsection
		