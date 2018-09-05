<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
@foreach ($disciplina->turmas as $turma)
    {{ $turma->ministrante }}
    {{ $turma->inicio }}
    <br>
@endforeach
<p><a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a></p>
