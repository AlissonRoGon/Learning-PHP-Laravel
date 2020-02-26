<p>
    <a href="disciplinas/create">Cadastrar disciplina</a>
</p>

<ul>
    @foreach ($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{$disciplina->id}}">
                {{$disciplina->titulo }}
            </a>
        </li>
    @endforeach
</ul>