@extends('template',['title'=>"detalhes do curso de $curso->nome "])
@section('conteudo')
		<h2>Curso - {{ $curso->nome }}</h2>
		<div class="row">
		<div class="col-8">
						<strong>ID do curso:</strong> {{ $curso->id }}<br />
						<strong>Descrição curta:</strong> {{ $curso->descricaocurta }}<br/>
						<strong>Carga Horária:</strong> {{ $curso->cargahoraria }}<br/>
						<strong>Descrição Longa:</strong> {{ $curso->descricaolonga }}<br/>
						<strong>Midia de destaque:</strong> {{ $curso->midiadestaque }}<br/>
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
		