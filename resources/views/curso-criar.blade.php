@extends('template',['title'=>"Cadastrar curso "])
@section('conteudo')
		<h1>Cadastro de cursos </h1>
		<form action="" method="post">
		@csrf
		<div class="form-group">
			<label for="categoria_id">Selecione a categoria do curso</label>
		<select id="categoria_id" name="categoria_id)>
		<option value=""> incluir categorias de um db </option>
		</Select>
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
		