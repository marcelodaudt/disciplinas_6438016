# resources/views/disciplinas/index.blade.php

<ul>
@foreach ($disciplinas as $disciplina)
 	<li>{{ $disciplina->titulo }} </li>
@endforeach
</ul>

