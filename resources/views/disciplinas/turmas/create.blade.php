<form method="POST" action="/disciplinas/{{ $disciplina_id }}/turmas">
    {{ csrf_field() }}

    Ministrante: <input name="ministrante">

    Data inicio: <input name="inicio">

    Data fim: <input name="fim">

    Bibliografia: <textarea name="bibliografia"></textarea>

    <button type="submit" class"btn btn-success">Salva</button>
</form>
