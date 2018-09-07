<?php

namespace App\Http\Controllers;

use App\disciplina;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DisciplinaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'search']);
    }

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
	    // Método para excluir uma disciplina
	    $disciplina->delete();
	    return redirect('/');
    }

    public function search(Request $request)
    {
        $text = $request->text;
        $disciplinas = Disciplina::where('titulo', 'LIKE', "%{$text}%")->get();
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function createTurma($disciplina_id)
    {
	    // Método para criar uma turma
	    return view('disciplinas.turmas.create',compact('disciplina_id'));
    }

    public function storeTurma(Request $request, Disciplina $disciplina)
    {
        // Método para salvar uma turma
        $turma = new \App\Turma;
        $turma->ministrante = $request->ministrante;
	    $turma->inicio = Carbon::createFromFormat('d/m/Y',$request->inicio);
	    $turma->fim = Carbon::createFromFormat('d/m/Y',$request->fim);
	    $turma->bibliografia = $request->bibliografia;
	    $turma->disciplina_id = $disciplina->id;

	    $disciplina->turmas()->save($turma);
	    return redirect("/disciplinas/$disciplina->id");
    }

}
