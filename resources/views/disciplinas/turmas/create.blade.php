@extends('layouts.master')

@section('content')
<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
    {{ csrf_field() }}

    Ministrante: <input name="ministrante">

    Data inicio: <input name="inicio" class="datepicker" autocomplete="off">

    Data fim: <input name="fim" class="datepicker" autocomplete="off">

    Bibliografia: <textarea name="bibliografia"></textarea>

    <button type="submit" class"btn btn-success">Salva</button>
</form>
@endsection