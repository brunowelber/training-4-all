@extends('template',['title'=>"Cadastrar Categorias "])
@section('conteudo')
		<h1>Cadastro de Categorias </h1>
		<form action="http://training-4-all.offline/categorias" method="post">
		@csrf


		<div class="form-group">
		<label for="nome">Nome da Categoria </label>
		<input name="nome" id="nome" type="text" autofocus required class="form-control" />
		</div>
		

		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		