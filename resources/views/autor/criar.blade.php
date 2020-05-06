@extends('template',['title'=>"Cursos EAD - Cadastrar Autoes "])
@section('conteudo')
		<h1>Cadastro de Autores </h1>
		<p> cadastre-se aqui e publique seus cursos. </p>
		<form action="http://training-4-all.offline/autores" method="post">
		@csrf

		<div class="form-group">
		<label for="nome">Nome do autor </label>
		<input name="nome" id="nome" type="text" required class="form-control" />
		</div>
		

		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		