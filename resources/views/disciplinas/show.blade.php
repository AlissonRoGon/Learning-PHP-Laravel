<h1>{{$disciplina->titulo}}</h1>
<p>Ementa: {{$disciplina->ementa}}</p>
<p>Data de criação: {{$disciplina->created_at}}</p>
<p>Data de atualização: {{$disciplina->updated_at}}</p>
<br>
    <h2>Turmas: </h2>
    @foreach ($disciplina->turmas as $turma)
        <div>
            {{ $turma->ministrante }}
            {{ $turma->inicio }}
        </div>
    @endforeach
<br>
<br>
<br>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>
<br>
<a href="/disciplinas/{{$disciplina->id}}/edit">Editar</a>
<br>
<br>
<a href="/">Voltar</a>