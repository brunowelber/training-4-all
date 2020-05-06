@extends('template',['title'=>"Editar Curso"])
@section('conteudo')
		<h2>Edição de curso </h2>
		<form action="{{ route("curso.update",[$curso->id]) }}" method="post">
		@csrf
		@method("put")
		<div class="form-group">
			<label for="categoria_id">Selecione a categoria do curso</label>
		<select id="categoria_id" name="categoria_id)>
		<option value=""> incluir categorias de um db </option>
		</Select>
	</div>
		<div class="form-group">
		<label for="nome">Nome do curso </label>
		<input name="nome" id="nome" type="text" required class="form-control" value="{{ $curso->nome }}" />
		</div>
		<div class="form-group">
		<label for="descricaocurta">Descrição curta do curso </label>
		<input name="descricaocurta" id="descricaocurta" type="text" required class="form-control" value="{{ $curso->descricaocurta }}" />
		</div>

<div class="form-group">
		<label for="descricaolonga"> Descrição longa do curso </label>
		<textarea  name="descricao" id="descricao" required class="form-control" value="{{ $curso->descricaolonga }}"></textarea>
		</div>
		
		<div class="form-group">
		<label for="cargahoraria">Carga horária </label>
		<input name="cargahoraria" id="cargahoraria" type="number" required class="form-control" value="{{ $curso->cargahoraria }}" />
</div>
<div class="form-group">
<label for="autor">autor  do curso </label>
		<input name="autor" id="autor" type="text" required class="form-control" value="{{ $curso->autor }}" />
		</div>
				<div class="form-group">
		<label for="midiadestaque">Mídia de destaque   do curso </label>
		<input name="midiadestaque" id="midiadestaque" type="text" class="form-control" value="{{ $curso->midiadestaque }}" />
		</div>
				<div class="form-group">
<fieldset>
<legend>Tipo de mídia a ser utilizada no curso </legend>
<input name="tipomidia" id="tipomidia" type="checkbox" class="form-control" />		<label for="tipomidia">Incluir de  um banco de dados  </label>
</fieldset>
</div>		


		<button type="submit" class="btn btn-primary">Editar</button>
				</form>
		@endsection
		