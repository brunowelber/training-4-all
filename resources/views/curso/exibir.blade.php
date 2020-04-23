@extends('template',['title'=>"detalhes do curso {{ $curso->nome }}"])
@section('conteudo')
		<h1> Curso {{ $curso->nome }}</h1>
				<src href="image.jpg" alt="Foto de uma sala de aula (fictícia)" />
				<p> {{ $curso->descricaocurta }} </p>
				
				<h2> informações do curso </h2>
				
				<ul>
				<li> Categoria: {{ $curso->categoria }} </li>
				<li><instrutor: {{ $curso->autor }} </li>
				<li> inscritos: dados  do banco em definição </li>
				<li> Carga horária: {{ $curso->cargahoraria }} </li>
				<li> Certificado de conclusão: dados  do banco em definição </li>
				</ul>
				
				<br /><p class=""> Valor do curso: dados  do banco em definição </p><br /><br />
				
		
				<h2> Descrição do curso </h2>
				
				<p> {{ $curso->descricao }} </p>
				
				<h2> Mídia de apresentação</h2>
		<p>{{ $curso->multimidia }} </p>		

<nav>
<button onclick="javascript:history.back()">Voltar </button>

<form action="" method="post">
@csrf
		<button type="submit" class="btn btn-primary">Quero me inscrever </button>
</form>
				</nav>
				
				<div >
				<h2> Administrativo </h2>
<a href="{{ route("curso.edit",[$curso->id]) }}" title="Editar dados do curso" class="btn btn-primary" role="button">Editar</a>
<form action="{{ route("curso.destroy",[$curso->id]) }}" method="post">
@csrf
@method("delete")
<button type="submit" class="btn btn-danger" title="Excluir curso  em definitivo">Excluir</button>
</form>
		</div>

		@endsection
		