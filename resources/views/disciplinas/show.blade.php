@extends('layouts.master')

<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<h2>Turmas:</h2>
@foreach ($disciplina->turmas as $turma)
    <div>{{ $turma->ministrante }}
    {{ $turma->inicio }}
    </div>
@endforeach
<p><a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a></p>
