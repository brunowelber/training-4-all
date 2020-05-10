@extends('template',['title'=>"Cursos EAD"])
@section('conteudo')
		<h2>Lista de cursos</h2>
<p class="text-center"><a href="{{ route("curso.create") }}" title="Novo curso">Cadastrar Curso</a></p>
		<ul class="list-unstyled">
		@forelse($cursos as $curso)
		<li><a href="{{ route("curso.show",[$curso->id]) }}" title="Veja detalhes sobre "{{ $curso->nome }}" role=""button"> - {{ $curso->descricaocurta }}</a></li>
		@empty
		<li>Não existem cursos cadastrados</li>
		@endforelse
		</ul>
		@endsection
		