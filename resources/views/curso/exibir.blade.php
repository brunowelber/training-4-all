@extends('template',['title'=>"detalhes do curso"])
@section('conteudo')
		<h2>Curso - {{ $curso->id }}</h2>
		<div class="row">
		<div class="col-8">
						<strong>Nome do curso:</strong> {{ $curso->nome }}<br />
						<strong>Descrição curta:</strong> {{ $curso->descricaocurta }}<br/>
						<strong>Carga Horária:</strong> {{ $curso->cargahoraria }}<br/>
						<strong>Tipo de midia:</strong> {{ $curso->tipomidia }}<br/>
				</div>
				<div class="col-4">
<a href="{{ route("curso.edit",[$curso->id]) }}" title="Editar dados do curso" class="btn btn-primary" role="button">Editar</a>
<form action="{{ route("curso.destroy",[$curso->id]) }}" method="post">
@csrf
@method("delete")
<button type="submit" class="btn btn-danger" title="Excluir curso em definitivo">Excluir</button>
</form>
		</div>
		</div>
		
		
		@endsection
		