<?php
namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autores = Autor::all();
        return view("autor.listar", [
            "autores" => $autores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("autor.criar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autor = new Autor();
        $autor->nome = $request->nome;
                $autor->save();
        return redirect()->action("AutorController@index");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Autor $autor
     * @return \Illuminate\Http\Response
     */
    public function show(Autor $autor)
    {
        return view("autor.exibir", [
            "autor" => $autor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Autor $autor
     * @return \Illuminate\Http\Response
     */
    public function edit(Autor $autor)
    {
        return view("autor.editar", [
            "autor" => $autor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Autor $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $autor->nome = $request->nome;
        $autor->save();
        return redirect()->action("AutorController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Autor $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
        return redirect()->action("AutorController@index");
    }
}
