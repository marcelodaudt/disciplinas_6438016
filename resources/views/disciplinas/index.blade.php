# resources/views/disciplinas/index.blade.php
@extends('layouts.master')

@section('content')

<ul>

<table class="table">
	<thead>
		<tr>
			<th>Nome da Disciplina</th>
			<th>Editar</th>
			<th>Apagar</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($disciplinas as $disciplina)
		<tr>
			<td>
				<a href="/disciplinas/{{ $disciplina->id }}">{{ $disciplina->titulo }}</a>
			</td>
			<td>
				<a href="/disciplinas/{{ $disciplina->id}}/edit"> Editar </a>
			</td>
			<td>
				<form method="POST" action="/disciplinas/{{ $disciplina->id }}">
		        	{{ csrf_field() }}
		        	{{ method_field('delete') }}
		        	<button type="submit">Apagar</button>
		    	</form>
			</td>
		</tr>
		@endforeach		
	</tbody>
</table>


</ul>

<p><a href="/disciplinas/create" class="btn btn-success">Cadastrar nova disciplina</a></p>

@endsection