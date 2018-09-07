@extends('layouts.master')

@section('content')
<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<h2>Turmas:</h2>
@foreach ($disciplina->turmas->sortByDesc('inicio') as $turma)
    <div>
    {{ $turma->ministrante }}
    {{ Carbon\Carbon::parse($turma->inicio)->format('d/m/Y') }} -
    {{ Carbon\Carbon::parse($turma->fim)->format('d/m/Y') }}
    </div>
@endforeach
<p><a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a></p>
@endsection
