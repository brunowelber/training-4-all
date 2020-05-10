@extends('template',['title'=>"Cadastrar curso"])
@section('conteudo')
		<h2>Cadastro de cursos</h2>
		<form action="http://training-4-all.offline/curso" method="post">
		@csrf
		<div class="form-group">
		<label for="categoria">Categoria</label>
		<select class="form-control" name="categoria_id" id="categoria" autofocus >
		@forelse($categorias as $categoria)
		<option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
		@empty
		<option value="0">Nenhuma categoria cadastrada</option>
		@endforelse
		</select>
		</div>
<div class="form-group">
		<label for="nome">Nome do curso </label>
		<input name="nome" id="nome" type="text" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="descricaocurta">Descrição curta do curso </label>
		<input name="descricaocurta" id="descricaocurta" type="text" required class="form-control" />
		</div>

<div class="form-group">
		<label for="descricaolonga"> Descrição longa do curso </label>
		<textarea  name="descricaolonga" id="descricaolonga" required class="form-control" ></textarea>
		</div>
		
		<div class="form-group">
		<label for="cargahoraria">Carga horária </label>
		<input name="cargahoraria" id="cargahoraria" type="number" required class="form-control" />
		</div>

				<div class="form-group">
		<label for="midiadestaque">Mídia de destaque   do curso </label>
		<input name="midiadestaque" id="midiadestaque" type="text" class="form-control" />
		</div>
				

		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		