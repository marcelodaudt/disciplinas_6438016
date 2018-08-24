<?php

namespace App\Http\Controllers;

use App\disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    // Método para mostrar todas as disciplinas cadastradas
	    $disciplinas = Disciplina::all();
	    return view('disciplinas.index', compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    // Método para gerar o formulário de cadastro de nova disciplina
	    return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    // Método para salvar nova disciplina no banco de dados
	    $disciplina = new Disciplina;
	    $disciplina->titulo = $request->titulo;
	    $disciplina->ementa = $request->ementa;
	    $disciplina->save();
	    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(disciplina $disciplina)
    {
	    // Método para mostrar detalhes das disciplinas
	    return view('disciplinas.show', compact('disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(disciplina $disciplina)
    {
	    // Método para criar o formulário de edição de uma disciplina
	    return view('disciplinas.edit', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disciplina $disciplina)
    {
	    // Método para salvar as alterações na disciplina no banco de dados
	    $disciplina->titulo = $request->titulo;
	    $disciplina->ementa = $request->ementa;
	    $disciplina->save();
	    return redirect("/disciplinas/$disciplina->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(disciplina $disciplina)
    {
        //
    }
}
