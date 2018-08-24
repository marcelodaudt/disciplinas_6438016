# resources/views/disciplinas/index.blade.php

<ul>
@foreach ($disciplinas as $disciplina)
	<li>
	    <a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a>
            <a href="/disciplinas/{{ $disciplina->id}}/edit"> Editar </a>
        </li>
@endforeach
</ul>

<p><a href="/disciplinas/create">Cadastrar nova disciplina</a></p>
