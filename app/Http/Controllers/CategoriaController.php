<?php
namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("categoria.listar", [
            "categorias" => $categorias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categoria.criar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->save();
        return redirect()->action("CategoriaController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view("categoria.exibir", [
            "categoria" => $categoria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view("categoria.editar", [
            "categoria" => $categoria
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $categoria->nome = $request->nome;
                $categoria->save();
        return redirect()->action("CategoriaController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->action("CategoriaController@index");
    }
}
