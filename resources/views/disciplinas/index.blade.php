# resources/views/disciplinas/index.blade.php
@extends('layouts.master')

<ul>
@foreach ($disciplinas as $disciplina)
	<li>
	    <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a>
            <a href="/disciplinas/{{ $disciplina->id}}/edit"> Editar </a>
	    <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit">Apagar</button>
            </form>
        </li>
@endforeach
</ul>

<p><a href="/disciplinas/create">Cadastrar nova disciplina</a></p>
