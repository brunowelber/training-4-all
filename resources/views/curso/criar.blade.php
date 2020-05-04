@extends('template',['title'=>"Cadastrar curso "])
@section('conteudo')
		<h1>Cadastro de cursos </h1>
		<form action="http://training-4-all.offline/cursos" method="post">
		@csrf
		<div class="form-group">
			<label for="categoria">Selecione Categoria</label>
		<select class="form-control" name="categoiria" id="categoiria">
		@forelse($categoirias as $categoiria)
		<option value="{{ $categoiria->id }}">{{ $categoria->nome }}</option>
		@empty
		<option value="0">Não possui categoirias cadastradas</option>
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
		<textarea  name="descricao" id="descricao" required class="form-control" ></textarea>
		</div>
		
		<div class="form-group">
		<label for="cargahoraria">Carga horária </label>
		<input name="cargahoraria" id="cargahoraria" type="number" required class="form-control" />
		</div>
<div class="form-group">
<label for="autor">autor  do curso </label>
		<input name="autor" id="autor" type="text" required class="form-control" />
		</div>
				<div class="form-group">
		<label for="midiadestaque">Mídia de destaque   do curso </label>
		<input name="midiadestaque" id="midiadestaque" type="text" class="form-control" />
		</div>
				<div class="form-group">
<fieldset>
<legend>Tipo de mídia a ser utilizada no curso </legend>
<input name="tipomidia" id="tipomidia" type="checkbox" class="form-control" />		<label for="tipomidia">Incluir de  um banco de dados  </label>
</fieldset>
</div>		

		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
		@endsection
		