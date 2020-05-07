@extends('template',['title'=>"Cursos EAD "])
@section('conteudo')
		<h1>Cursos EAD </h1>
		<h2> Tecnologia  </h2>
<h3> Curso 1 </h3>
<p>Descrição curta do curso 1</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 1" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 1 </a>
<h3> Curso 2 </h3>
<p>Descrição curta do curso 2</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 2" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 2 </a>
<h3> Curso 3 </h3>
<p>Descrição curta do curso 3</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 3" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 3 </a>
<a href="exibircategorias.html" > Exibir todos os cursos desta categoria </a>

		<h2> Cultura </h2>
<h3> Curso 1 </h3>
<p>Descrição curta do curso 1</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 1" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 1 </a>
<h3> Curso 2 </h3>
<p>Descrição curta do curso 2</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 2" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 2 </a>
<h3> Curso 3 </h3>
<p>Descrição curta do curso 3</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 3" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 3 </a>
<a href="exibircategorias.html" > Exibir todos os cursos desta categoria </a>
<!-- início do conteúdo estático só para teste de front -->
		<h2> Saúde  </h2>
<h3> Curso 1 </h3>
<p>Descrição curta do curso 1</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 1" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 1 </a>
<h3> Curso 2 </h3>
<p>Descrição curta do curso 2</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 2" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 2 </a>
<h3> Curso 3 </h3>
<p>Descrição curta do curso 3</p>
<img src="imagecurso1.jpg" alt="Imagem do curso 3" />
<a href="http://localhost/training-4-all/resources/views/curso/exibir.blade.php" title="Exibir mais informações do curso"> Detalhes do curso 3 </a>
<a href="exibircategorias.html" > Exibir todos os cursos desta categoria </a>
<!-- final do conteúdo, após usar, apagar -->


<p class="text-center"><a href="{{ route("cursos.create") }}" title="Novo curso" role="button" >Cadastrar um novo curso </a></p>

<!-- @forelse($cursos as $curso)
		<h3>{{ $curso->nome }}</h3>
		<p>{{ $curso->descricaocurta }}</p>
		
		<p><a href="{{ route("curso.show",[$curso->id]) }}" title="Veja detalhes sobre esse curso">Detalhes sobre {{ $curso->nome }}</a></p>
		@empty
		<p>Não existem cursos  cadastrados</p>
		@endforelse
-->
		@endsection
		