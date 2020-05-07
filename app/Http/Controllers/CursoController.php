<?php
namespace App\Http\Controllers;

use App\Curso;
use App\Categoria;
use App\Autor;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view("curso.listar", [
            "cursos" => $cursos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
		return view("curso.criar", [
		"categorias" => $categorias
        ]);
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nome = $request->nome;
        $curso->descricaocurta = $request->descricaocurta;
		$curso->descricaolonga = $request->descricaolonga;
				$curso->cargahoraria = $request->cargahoraria;
$curso->midiadestaque = $request->midiadestaque;

        $curso->save();
		$curso->categorias()->sync([
            $request->categoria
			]);
        return redirect()->action("CursoController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Curso $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view("curso.exibir", [
            "curso" => $curso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Curso $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view("curso.editar", [
            "curso" => $curso
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Curso $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->nome = $request->nome;
        $curso->descricaocurta = $request->descricaocurta;
		$curso->descricaolonga = $request->descricaolonga;
		$curso->midiadestaque = $request->midiadestaque;
		$curso->cargahoraria = $request->cargahoraria;
		$curso->autor = $request->autor;
		$curso->tipomidia = $request->tipomidia;
        $curso->save();
        return redirect()->action("CursoController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Curso $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->action("CursoController@index");
    }
}
